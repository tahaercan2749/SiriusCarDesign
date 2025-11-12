<?php

namespace App\Services;

use App\Models\Blade;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FaqService
{
    public function store(Request $request)
    {
        $status = 'success';
        $message = 'SSS Kaydedildi';

        try {
            $faq = Faq::create([
                'question' => $request->question,
                'answer' => $request->answer,
                'page_id' => $request->page_id,
                'published' => 1
            ]);
            LogService::add("FaqService Store", $status, $message);
            return ['status' => $status, 'message' => $message];

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'SSS Kaydedilemedi';
            LogService::add("FaqService Store", $status, $message . " => " . $exception->getMessage());
            return ['status' => $status, 'message' => $message];
        }

    }

    public function destroy($id)
    {
        $status = 'success';
        $message = 'SSS Silindi';
        try {
            $faq = Faq::findOrFail($id);
            if ($faq) {
                $faq->delete();
                LogService::add("FaqService Destroy", $status, $message);
            } else {
                $status = 'error';
                $message = 'SSS Bulunamadı';
                LogService::add("FaqService Destroy", $status, $message);
            }
            return ['status' => $status, 'message' => $message];
        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'SSS Silinemedi';
            LogService::add("FaqService Destroy", $status, $message . " => " . $exception->getMessage());
            return ['status' => $status, 'message' => $message];
        }
    }

    public function publish($id)
    {
        $status = 'success';
        $message = 'SSS Artık Görünür';
        try {
            $faq = Faq::findOrFail($id);
            if ($faq && $faq->published == 1) {
                $faq->update(['published' => 0]);
            } elseif ($faq && $faq->published == 0) {
                $message = 'SSS Artık Gizli';
                $faq->update(['published' => 1]);
            } else {
                $status = 'error';
                $message = 'SSS Bulunamadı';
            }
            LogService::add("FaqService Publish", $status, $message);
            return ['status' => $status, 'message' => $message];
        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'SSS Publish İşlemi Başarısız';
            LogService::add("FaqService Publish", $status, $message . " => " . $exception->getMessage());
            return ['status' => $status, 'message' => $message];
        }
    }


}
