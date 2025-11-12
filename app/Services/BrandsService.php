<?php

namespace App\Services;

use App\Models\Blade;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BrandsService
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
        $message = "Marka Kaydedildi.";

        try {
            $brand = Brands::create([
                "name" => $request->name,
                "link" => $request->link,
                "details" => $request->details
            ]);
            $imageName = Str::slug($request->name, "-");
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->guessExtension();
                $fileName = $imageName . '.' . $extension;
                $upload = $this->commonService->uploadFile(config("constants.brands_path"), $file, $fileName);
                if ($upload) {
                    $brand->update(["image" => $fileName]);
                } else {
                    LogService::add("Brands Service Store", "warning", "Marka resmi kaydedilemedi");
                }
            }
            return ["status" => $status, "message" => $message];

        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Marka kaydedilemedi.";
            LogService::add("Brands Service Store", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }

    public function destroy($id)
    {
        $status = "success";
        $message = "Marka Silindi.";
        try {
            $brand = Brands::findOrFail($id);
            $brand->delete();
            $deleteImage = $this->commonService->deleteFile(config("constants.brands_path"), $brand->image);
            LogService::add("Brands Service Destroy", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Marka Silinemedi.";
            LogService::add("Brands Service Destroy", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

}
