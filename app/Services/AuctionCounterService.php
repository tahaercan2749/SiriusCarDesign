<?php

namespace App\Services;

use App\Models\AuctionCounter;
use App\Models\Blade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AuctionCounterService
{
    protected CommonService $commonService;

    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
    }

    public function store(Request $request)
    {
        $status = "success";
        $message = "Mezat Kaydedildi";
        try {
            $auction = AuctionCounter::create([
                'name' => $request->name,
                'location' => $request->location,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ]);
            LogService::add("AuctionCounterService Store", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Mezat Kaydedilemedi";
            LogService::add("AuctionCounterService Store", $status, $message . " =>" . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

    public function destroy($id)
    {
        $status = "success";
        $message = "Mezat Silindi";
        try {
            $auction = AuctionCounter::findOrFail($id);
            if ($auction) {
                $auction->delete();
                LogService::add("AuctionCounterService Destroy", $status, $message);
            } else {
                $status = 'error';
                $message = 'Mezat Bulunamadı';
                LogService::add("AuctionCounterService Destroy", $status, $message);
            }
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Mezat Kaydedilemedi";
            LogService::add("AuctionCounterService Destroy", $status, $message . " =>" . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

    public function publish($id)
    {
        $status = "success";
        $message = "Mezat Yayınlandı";
        try {
            $auction = AuctionCounter::findOrFail($id);
            if ($auction) {
                if ($auction->active == 1) {
                    $auction->update(["active" => 0]);
                    $message = "Mezat Yayından Kaldırıldı";
                } else {
                    $auction->update(["active" => 1]);
                    $message = "Mezat Yayınlandı";
                }
                LogService::add("AuctionCounterService Publish", $status, $message);
            } else {
                $status = 'error';
                $message = 'Mezat Bulunamadı';
                LogService::add("AuctionCounterService Publish", $status, $message);
            }
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Mezat Yayınlama Hatası";
            LogService::add("AuctionCounterService Publish", $status, $message . " =>" . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

    public function form($id)
    {
        $status = "success";
        $message = "Mezat Katılım Formu Açıldı";
        try {
            $auction = AuctionCounter::findOrFail($id);
            if ($auction) {
                if ($auction->form == 1) {
                    $auction->update(["form" => 0]);
                    $message = "Mezat Katılım Formu Kapatıldı";
                } else {
                    $auction->update(["form" => 1]);
                    $message = "Mezat Katılım Formu Açıldı";
                }
                LogService::add("AuctionCounterService Form", $status, $message);
            } else {
                $status = 'error';
                $message = 'Mezat Bulunamadı';
                LogService::add("AuctionCounterService Form", $status, $message);
            }
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Mezat Katılım Formu Hatası";
            LogService::add("AuctionCounterService Form", $status, $message . " =>" . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

}
