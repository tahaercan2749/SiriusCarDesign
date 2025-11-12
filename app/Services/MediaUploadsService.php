<?php

namespace App\Services;

use App\Models\Blade;
use App\Models\MediaUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaUploadsService
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
        $message = "Dosya Yüklendi";

        try {
            $fileName = "uploaded-file-" . Str::lower(Str::random(5));
            if ($request->name) {
                $fileName = Str::slug($request->name, "-");
            }
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $extension = $file->guessExtension();
                $fileName = $fileName . '.' . $extension;
                $upload = $this->commonService->uploadFile(config("constants.uploads_path"), $file, $fileName);
            }
            $mediaUploads = MediaUpload::create([
                'name' => $request->name,
                'file_name' => $fileName,
            ]);
            LogService::add("MediaUploadsService Store", $status, $message);
            return [
                'status' => $status,
                'message' => $message,
                'file' => $mediaUploads,
            ];
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Dosya Yüklenemedi";
            LogService::add("MediaUploadsService Store", $status, $message." => ".$exception->getMessage());
            return [
                'status' => $status,
                'message' => $message
            ];

        }
    }

    public function destroy($id)
    {
        $status = "success";
        $message = "Dosya Silindi";
        try {
            $media = MediaUpload::find($id);
            $media->delete();
            $this->commonService->deleteFile(config("constants.uploads_path"), $media->file_name);
            LogService::add("MediaUploadsService Destroy", $status, $message);
            return ["status" => $status, "message" => $message];
        }catch (\Throwable $exception){
            $status = "error";
            $message = "Dosya Silinemedi";
            LogService::add("MediaUploadsService Destroy", $status, $message." => ".$exception->getMessage());
            return ["status" => $status, "message" => $message];
        }

    }


}
