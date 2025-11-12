<?php

namespace App\Services;

use App\Models\GuestReviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GuestReviewsService
{
    protected CommonService $commonService;

    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
        //$this->commonService-> olarak kullanılacak
    }

    public function store(Request $request)
    {

    }

    public function destroy($id)
    {

    }

    public function changeStatus(Request $request, $id)
    {
        $status = "success";
        $message = "Kullanıcı Yorumu Onaylandı.";

        try {
            $review = GuestReviews::findOrFail($id);
            if ($review) {
                if ($request->review_status == 1) {
                    $review->update([
                        "status" => 1
                    ]);
                } elseif ($request->review_status == 2) {
                    $review->update([
                        "status" => 2
                    ]);

                    $message = "Kullanıcı Yorumu Reddedildi.";
                } else {
                    $status = "error";
                    $message = "Geçersiz İşlem.";
                }
            } else {
                $status = "error";
                $message = "Kullanıcı Yorumu Bulunamadı.";
            }
            LogService::add("GuestReviewsService ChangeStatus", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Bir hata Oluştu.";
            LogService::add("GuestReviewsService ChangeStatus", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }


}
