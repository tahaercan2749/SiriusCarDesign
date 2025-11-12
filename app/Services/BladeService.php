<?php

namespace App\Services;

use App\Models\Blade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BladeService
{
    protected CommonService $commonService;

    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
        //$this->commonService-> olarak kullanılacak
    }

    public function store(Request $request)
    {
        $status = 'success';
        $message = 'Blade Kaydedildi';
        $name = $request->name;
        $slug = Str::slug($name, "-");
        try {
            $blade = Blade::create([
                'name' => $name,
                'file' => $slug,
            ]);
            if ($request->hasFile('blade_file')) {
                $file = $request->file('blade_file');
                $this->commonService->uploadFile(config('constants.blade_path'), $file, $blade->file);
                $message = 'Blade Kaydedildi ve Yüklendi';
            }
            return [
                'status' => $status,
                'message' => $message
            ];

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Kaydedilemedi.';
            LogService::add('Blade Service Store', $status, $message . $exception->getMessage());
            return [
                'status' => $status,
                'message' => $message
            ];
        }
    }

    public function destroy($id)
    {
        $status = 'success';
        $message = 'Blade Silindi';

        try {
            $blade = Blade::findOrFail($id);
            // Blade Dosyadan Siliniyor...
            $fileDelete = $this->commonService->deleteFile(config('constants.blade_path'), $blade->file);

            if ($fileDelete) {
                $message = $message . ' Blade Dosyası Silindi';
            } else {
                $status = 'warning';
                $message = $message . ' Blade Dosyası Silinemedi';
            }

            // Vt'den Kaydı Siliyoruz
            if ($blade->delete()) {
                $message = $blade->name . " " . $message;
            } else {
                $status = 'warning';
                $message = $blade->name . " Silinemedi";
            }
            LogService::add('Blade Service Destroy', $status, $message);
        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Silinemedi';
            LogService::add('Blade Service Destroy', $status, $message . $exception->getMessage());
        }

        return ['status' => $status, 'message' => $message];
    }


}
