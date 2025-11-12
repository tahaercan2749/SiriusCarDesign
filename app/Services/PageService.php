<?php

namespace App\Services;

use App\Models\Blade;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageService
{
    protected CommonService $commonService;

    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
        //$this->commonService-> olarak kullanılacak
    }

    public function store(Request $request)
    {
        $status = "success";
        $message = "Sayfa Kaydedildi";

        try {
            $page = Page::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'content' => $request->content_text,
                'category_id' => $request->category_id,
                "parent_page" => $request->parent_page,
                'blade_id' => $request->blade_id,
                'translation_of' => $request->translation_of,
                'lang_id' => $request->lang_id,
                'is_main' => 1
            ]);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->guessExtension();
                $fileName = $page->slug . '.' . $extension;
                $this->commonService->uploadFile(config('constants.page_path'), $file, $fileName);
                $page->update([
                    "image" => $fileName,
                ]);
                LogService::add("Page Service Store", "success", $page->title . ' Sayfa Resmi Kaydedildi');
            }

            if ($request->hasFile('breadcrumb_image')) {
                $file = $request->file('breadcrumb_image');
                $extension = $file->guessExtension();
                $fileName = $page->slug . '.' . $extension;
                $this->commonService->uploadFile(config('constants.breadcrumb_path'), $file, $fileName);
                $page->update([
                    "breadcrumb_image" => $fileName,
                ]);
                LogService::add("Page Service Store", "success", $page->title . ' Breadcrumb Resmi Kaydedildi');
            }
            return ["status" => $status, "message" => $message];

        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Kaydedilemedi";
            LogService::add("Page Service Store ", $status, $message . ' => ' . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }

    public function update(Request $request, $id)
    {
        $status = "success";
        $message = "Sayfa Güncellendi";

        try {
            $page = Page::findOrFail($id);
//            Resim Silinmesi İstenmişse Resim Silinir.
            if ($request->removeImage) {
                $this->commonService->deleteFile(config('constants.page_path'), $page->image);
                $page->update(["image" => NULL]);
            }
            if ($request->removeBreadcrumbImage) {
                $this->commonService->deleteFile(config('constants.breadcrumb_path'), $page->breadcrumb_image);
                $page->update(["breadcrumb_image" => NULL]);
            }

            if ($request->hasFile('image')) {
                if ($page->image) {
                    $this->commonService->deleteFile(config('constants.page_path'), $page->image);
                }

                $file = $request->file('image');
                $extension = $file->guessExtension();
                $fileName = $page->slug . '-' . Str::lower(Str::random(4)) . '.' . $extension;
                $this->commonService->uploadFile(config('constants.page_path'), $file, $fileName);
                $page->update(["image" => $fileName]);
            }

            if ($request->hasFile('breadcrumb_image')) {
                if ($page->image) {
                    $this->commonService->deleteFile(config('constants.page_path'), $page->image);
                }

                $file = $request->file('breadcrumb_image');
                $extension = $file->guessExtension();
                $fileName = $page->slug . '-' . Str::lower(Str::random(4)) . '.' . $extension;
                $this->commonService->uploadFile(config('constants.breadcrumb_path'), $file, $fileName);
                $page->update(["breadcrumb_image" => $fileName]);
            }

            if (!$request->removeImage && !$request->hasFile('image') && $page->image) {
//                Resmin adı değişmesi gerekiyorsa
                if ($request->slug != $page->slug) {
                    $extension = pathinfo($page->image, PATHINFO_EXTENSION);
                    $newImageName = $request->slug . '-' . Str::lower(Str::random(4)) . '.' . $extension;
                    $this->commonService->renameFile(config('constants.page_path'), $page->image, $newImageName);
                    $page->update(["image" => $newImageName]);
                }
            }

            $page->update([
                "title" => $request->title,
                "slug" => $request->slug,
                "content" => $request->content_text,
                "blade_id" => $request->blade_id,
                "category_id" => $request->category_id,
                "translation_of" => $request->translation_of,
                "parent_page" => $request->parent_page,
                "lang_id" => $request->lang_id
            ]);

            LogService::add("Page Service Update", $status, $message);
            return ["status" => $status, "message" => $message];

        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Sayfa Güncellenemedi";
            LogService::add("Page Service Update ", $status, $message . ' => ' . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }

    public function publishPage($id)
    {
        $status = "success";
        $message = NULL;
        try {
            $page = Page::findOrFail($id);
            if ($page->published == 1) {
                $page->update(["published" => 0]);
                $message = $page->title . ' Sayfa Yayından Kaldırıldı.';
                LogService::add("Page Service PublishPage", $status, $message);
            } else {
                $page->update(["published" => 1]);
                $message = $page->title . ' Sayfa Yayınlandı.';
                LogService::add("Page Service PublishPage", $status, $message);
            }
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = 'İşlem Yapılamadı';
            LogService::add("Page Service PublishPage ", $status, $message . ' => ' . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

    public function destroy($id)
    {
        $status = "success";
        $message = 'Sayfa Silindi';
        try {
            $page = Page::findOrFail($id);
            $page->delete();
            $message = $page->title . ' Sayfa Silindi';
            LogService::add("Page Service Destroy", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Sayfa Silinemedi";
            LogService::add("Page Service Destroy ", $status, $message . ' => ' . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

    public function restore($id)
    {
        $status = "success";
        $message = 'Sayfa Geri Yüklendi';
        try {
            $page = Page::onlyTrashed()->findOrFail($id);
            $page->restore();
            $message = $page->title . ' ' . $message;
            LogService::add("Page Service Restore", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Sayfa Geri Yüklenemedi";
            LogService::add("Page Service Restore ", $status, $message . ' => ' . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }

    public function forceDelete($id)
    {
        $status = "success";
        $message = 'Sayfa Silindi';

        try {
            $page = Page::onlyTrashed()->findOrFail($id);
            $page->forceDelete();
            $message = $page->title . ' Sayfa Silindi';
            LogService::add("Page Service ForceDelete", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Sayfa Silinemedi";
            LogService::add("Page Service ForceDelete ", $status, $message . ' => ' . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }


}
