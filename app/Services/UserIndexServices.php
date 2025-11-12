<?php

namespace App\Services;

use App\Models\Blade;
use App\Models\GuestReviews;
use App\Models\ReviewsImages;
use App\Models\ReviewsImagesTemp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserIndexServices
{
    protected CommonService $commonService;

    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
        //$this->commonService-> olarak kullanılacak
    }


    public function review(Request $request)
    {
        $status = "success";
        $message = "Yorumunuz İletildi. Onay Aldıktan Sonra Yayınlanacaktır.";

        try {
            if ($request->temp_token) {

                $review = GuestReviews::create([
                    "name" => $request->name,
                    "email" => $request->email,
                    "comment" => $request->comment,
                    "rating" => $request->rating,
                    "ip" => $request->ip(),
                ]);

                $reviewFiles = ReviewsImagesTemp::where("temp_token", $request->temp_token)->get();
                foreach ($reviewFiles as $reviewFile) {
                    $move = $this->commonService->moveFile($reviewFile->image, config("constants.reviews_path_temp"), config("constants.reviews_path"));
                    $reviewImage = ReviewsImages::create([
                        "image" => $reviewFile->image,
                        "review_id" => $review->id,
                    ]);
                }
                LogService::add("UserIndexService Review", $status, $message);

                return ["status" => $status, "message" => $message];
            } else {
                $status = "error";
                $message = "Token Yüklenemedi Sayfayı Yenileyip Tekrar Deneyiniz.";
                LogService::add("UserIndexService Review", $status, $message);
                return ["status" => $status, "message" => $message];
            }
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Yorumunuz İletilemedi.";
            LogService::add("UserIndexService Review", $status, $message . " => " . $exception->getMessage());
        }

    }

    public function reviewImageTemp(Request $request)
    {

        $status = "success";
        $message = "Medya Yüklendi";

        try {
            $fileName = $request->temp_token . "-" . Str::lower(Str::random(5));
            $extension = NULL;
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $extension = $file->guessExtension();
                $fileName .= "." . $extension;
                $uploadFile = $this->commonService->uploadFile(config("constants.reviews_path_temp"), $file, $fileName);
            }
            if ($fileName) {
                $reviewMedia = ReviewsImagesTemp::create([
                    'temp_token' => $request->temp_token,
                    'image' => $fileName,
                ]);

            } else {
                $status = "error";
                $message = "Resim Yüklenmedi.";
            }
            LogService::add("UserIndexService reviewImageTemp", $status, $message);
            return ["status" => $status, "message" => $message];

        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Medya Yüklenemedi.";
            LogService::add("UserIndexService reviewImageTemp", $status, $message);
            return ["status" => $status, "message" => $message];
        }

    }

}
