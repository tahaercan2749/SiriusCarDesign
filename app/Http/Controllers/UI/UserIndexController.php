<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormStoreRequest;
use App\Http\Requests\GuestReviesStoreRequest;
use App\Mail\ContactMail;
use App\Models\ApiKeys;
use App\Models\AuctionCounter;
use App\Models\Category;
use App\Models\ContactForm;
use App\Models\Contacts;
use App\Models\GuestReviews;
use App\Models\Page;
use App\Models\ReviewsImagesTemp;
use App\Models\SiteSettings;
use App\Models\Slider;
use App\Models\SpecialCategories;
use App\Models\UserVisits;
use App\Models\VisitedUserCalls;
use App\Services\LogService;
use App\Services\UserIndexServices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class UserIndexController extends Controller
{

    protected UserIndexServices $userIndexServices;

    public function __construct(UserIndexServices $userIndexServices)
    {
        $this->userIndexServices = $userIndexServices;
    }

    public function index()
    {
        $slider = Slider::where('published', 1)->get();

//        Özel kategorilerden özel kategorilerini buluyoruz
//        $urunlerCategoriId = SpecialCategories::where('name', 'urunlerimiz')->first()->category_id;
//        $haberlerCategoryId = SpecialCategories::where('name', 'haberler')->first()->category_id;
//        $hikayemizCategoryId = SpecialCategories::where('name', 'hikayemiz')->first()->category_id;
//
//        $haberler = Category::find($haberlerCategoryId);
//        $urunler = Category::find($urunlerCategoriId);
//        $hikayemiz = Category::find($hikayemizCategoryId);

        return view('user.index', compact('slider'));
    }

    public function slugDecoder($slug)
    {
//        Sayfa Bilgisini Çekiyoruz
        $page = Page::where("slug", $slug)->where("published", 1)->first();
        if (!$page) {
            return redirect()->route('404');
        }
        $blade = $page->blade;
        $seo = $page->seo;
        if ($blade->file == "haber-detay") {
            $nested = 3;
            $otherBlogs = collect();
            $beforePages = Page::where('category_id', $page->category_id)->where('is_main', 0)->where('id', '>', $page->id)->orderBy('id', 'asc')->limit($nested)->where('published', 1)->get();

            foreach ($beforePages as $blog) {
                $otherBlogs->push($blog);
            }
            if ($beforePages->count() < $nested) {
                $nested = $nested - $beforePages->count();
                $afterPages = Page::where('category_id', $page->category_id)->where('is_main', 0)->where('id', '<', $page->id)->orderBy('id', 'asc')->limit($nested)->where('published', 1)->get();

                foreach ($afterPages as $blog) {
                    $otherBlogs->push($blog);
                }

            }
            return view('user.blades.' . $blade->file, compact('page', 'seo', 'otherBlogs'));
        } else {
            return view('user.blades.' . $blade->file, compact('page', 'seo'));
        }
    }

    public function sitemap()
    {
        $slugs = Page::select('slug', 'updated_at')->where('id', '>', 0)->where("published", 1)->get();
        return response()->view('user.sitemap', compact('slugs'))
            ->header('Content-Type', 'xml');
    }

    public function llms()
    {
        $mainPageSetting = SiteSettings::first();
        $contact = Contacts::first();
//        $pages = Page::where("published", 1)->get();
        $categories = Category::with(['children', 'page', 'pages.subPages'])->whereNull('parent_category')->get();
        return response()->view('user.llms', compact('categories', 'contact', 'mainPageSetting'))
            ->header('Content-Type', 'text/plain');

    }

    public function setVisitedUserCall(Request $request)
    {

        try {
            $ipAddress = $request->ip();

            $call = VisitedUserCalls::create([
                "type" => $request->type,
                "ip_address" => $ipAddress,
            ]);
            return redirect($request->link);
        } catch (\Throwable $exception) {
            LogService::add("UserIndexController setVisitedUserCall", "error", "Link Erişim Hatası: => " . $exception->getMessage());
            return redirect()->back();
        }
    }

    public function contactForm(ContactFormStoreRequest $request)
    {
        $apiKeys = ApiKeys::first();
        if ($apiKeys) {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $apiKeys->recaptcha_secret_key,
                'response' => $request->recaptcha_token,
            ]);

            $result = $response->json();

            if (!$result['success'] || $result['score'] < 0.5) {
                return redirect(url()->previous())->withInput()->with(['status' => 'error', 'message' => 'reCaptcha Doğrulaması Başarısız.']);
            }
        }


        $contactInformation = Contacts::select("email", "email2")->first();

        if ($contactInformation) {

            try {
                $status = "success";
                $message = "Mesajınız bize ulaştı. En kısa sürede tarafınıza dönüş yapacağız.";
                $contact = ContactForm::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'ip' => $request->ip(),
                ]);
                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'ip' => $request->ip(),
                    'timestamp' => now()->format('d.m.Y H:i:s'),
                ];
                if ($contactInformation->email2) {
                    Mail::to([$contactInformation->email, $contactInformation->email2])->send(new ContactMail($data));
                } else {
                    Mail::to($contactInformation->email)->send(new ContactMail($data));
                }
                LogService::add("UserIndexController contactForm", $status, $message);
                return redirect(url()->previous())->with(['status' => $status, 'message' => $message]);
            } catch (\Throwable $exception) {
                $status = "error";
                $message = "Mesajınız iletilirken bir sorun yaşandı. Lütfen sayfayı yenileyip tekrar deneyin.";
                LogService::add("UserIndexController contactForm", $status, "Hata => " . $exception->getMessage());
                return redirect(url()->previous())->withInput()->with(['status' => $status, 'message' => $message]);
            }


        } else {
            try {
                $status = "success";
                $message = "Mesajınız bize ulaştı. En kısa sürede tarafınıza dönüş yapacağız.";
                $contact = ContactForm::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'ip' => $request->ip(),
                ]);
                LogService::add("UserIndexController contactForm (Else)", $status, $message);
            } catch (\Throwable $exception) {
                $status = "error";
                $message = "Mesajınız iletilirken bir sorun yaşandı. Lütfen sayfayı yenileyip tekrar deneyin.";
                LogService::add("UserIndexController contactForm (Else)", $status, "Hata => " . $exception->getMessage());
                return redirect(url()->previous())->withInput()->with(['status' => $status, 'message' => $message]);
            }

        }


    }

    public function guestReview(GuestReviesStoreRequest $request)
    {
        $result = $this->userIndexServices->review($request);
        return redirect()->route("home")->with(["status" => $result["status"], "message" => $result["message"]]);
    }

    public function guestReviewImage(Request $request)
    {
        $result = $this->userIndexServices->reviewImageTemp($request);
        return response()->json(["status" => $result["status"], "message" => $result["message"]]);
    }


}
























