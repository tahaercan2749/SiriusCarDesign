<?php

namespace App\Services;

use App\Models\Blade;
use App\Models\HomePageManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomePageManagementService
{
    public function store(Request $request)
    {
        $status = "success";
        $message = "Kısım Kaydedildi";
        try {
            $section = HomePageManagement::create([
                "title" => $request->title,
                "content" => $request->content_text,
                "image_link" => $request->image_link,
                "video_link" => $request->video_link,
                "page_id" => $request->page_id
            ]);
            LogService::add("HomePageManagementService Store", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Kısım Kaydedilemedi";
            LogService::add("HomePageManagementService Store", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

    public function destroy($id)
    {
        $status = "success";
        $message = "Kısım Silindi.";
        try {
            $section = HomePageManagement::findOrFail($id);
            if ($section) {
                $section->delete();
            } else {
                $message = "Kısım Bulunamadı.";
            }
            LogService::add("HomePageManagementService Destroy", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Kısım Silinirken Hata Oluştu.";
            LogService::add("HomePageManagementService Destroy", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];

        }
    }

    public function update(Request $request, $id)
    {
        $status = "success";
        $message = "Kısım Güncellendi.";
        try {
            $section = HomePageManagement::findOrFail($id);
            if ($section) {
                $section->update([
                    "title" => $request->title,
                    "content" => $request->content_text,
                    "image_link" => $request->image_link,
                    "video_link" => $request->video_link,
                    "page_id" => $request->page_id
                ]);
            } else {
                $status = "error";
                $message = "Kısım Bulunamadı.";
            }
            LogService::add("HomePageManagementService Update", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Kısım Güncellenirken Hata Oluştu.";
            LogService::add("HomePageManagementService Update", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }

    public function forceDelete($id)
    {
        $status = "success";
        $message = "Kısım Tamamen Silindi.";

        try {
            $section = HomePageManagement::onlyTrashed()->findOrFail($id);
            if ($section) {
                $section->forceDelete();
                LogService::add("HomePageManagementService ForceDelete", $status, $message);
            } else {
                $status = "error";
                $message = "Kısım Bulunamadı.";
                LogService::add("HomePageManagementService ForceDelete", $status, $message);
            }
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Kısım Silinirken Hata Oluştu.";
            LogService::add("HomePageManagementService ForceDelete", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }

    public function restore($id)
    {
        $status = "success";
        $message = "Kısım Geri Yüklendi..";

        try {
            $section = HomePageManagement::onlyTrashed()->findOrFail($id);
            if ($section) {
                $section->update([
                    "deleted_at" => NULL,
                ]);
                LogService::add("HomePageManagementService ForceDelete", $status, $message);
            } else {
                $status = "error";
                $message = "Kısım Bulunamadı.";
                LogService::add("HomePageManagementService ForceDelete", $status, $message);
            }
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Kısım Geri Yüklenirken Hata Oluştu.";
            LogService::add("HomePageManagementService ForceDelete", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

}
