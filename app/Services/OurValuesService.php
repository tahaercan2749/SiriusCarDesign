<?php

namespace App\Services;

use App\Models\OurValues;
use Illuminate\Http\Request;

class OurValuesService
{
    protected CommonService $commonService;


    public function index()
    {
        try {
            $values = OurValues::all();
            return compact("values");
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Değerlerimiz verileri çekilemedi";
            LogService::add("Our Values Service - Index", $status, $message . " => " . $exception->getMessage());
        }

    }

    public function store(Request $request)
    {
        $status = 'success';
        $message = 'Değerlerimiz bilgisi kaydedildi';

        try {
            $value = OurValues::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return [
                'status' => $status,
                'message' => $message
            ];

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Kaydedilemedi.';
            LogService::add('Our Values Service Store', $status, $message . $exception->getMessage());
            return [
                'status' => $status,
                'message' => $message
            ];
        }
    }

    public function edit($id)
    {
        $status = 'success';
        $message = 'Değerlerimiz bilgisi çekildi';

        try {
            $value = OurValues::findOrFail($id);
            return compact("value","status","message");

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Değerlerimiz bilgisi çekilemedi.';
            LogService::add('Our Values Service - Edit', $status, $message . $exception->getMessage());
            return [
                'status' => $status,
                'message' => $message
            ];
        }
    }

    public function update(Request $request, $id)
    {
        $status = 'success';
        $message = 'Değerlerimiz bilgisi güncellendi';

        try {
            $value = OurValues::findOrFail($id);
            $value->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            return compact("status","message");

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Değerlerimiz bilgisi güncellenemedi.';
            LogService::add('Our Values Service - Update', $status, $message . $exception->getMessage());
            return [
                'status' => $status,
                'message' => $message
            ];
        }
    }

    public function destroy($id)
    {
        $status = 'success';
        $message = 'Değerlerimizin kaydı Silindi';

        try {
            $value = OurValues::findOrFail($id);

            if ($value->delete()) {
                $message = $value->title . " " . $message;
            } else {
                $status = 'warning';
                $message = $value->title . " Silinemedi";
            }
            LogService::add('Our Values Service - Destroy', $status, $message);
        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Silinemedi';
            LogService::add('Our Values Service - Destroy', $status, $message . $exception->getMessage());
        }

        return ['status' => $status, 'message' => $message];
    }


}
