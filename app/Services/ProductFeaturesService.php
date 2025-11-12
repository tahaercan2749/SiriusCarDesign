<?php

namespace App\Services;

use App\Models\Page;
use App\Models\TechnicalInformation;
use App\Models\NutritionalValues;
use App\Models\Packaging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductFeaturesService
{
    protected CommonService $commonService;

    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
        //$this->commonService-> olarak kullanılacak
    }

    public function store(Request $request, $id)
    {
        $status = 'success';
        $message = 'Kaydedildi';

        try {
            $page = Page::findOrFail($id);
            $mainPageId = $page->parentCategory->id;
            $techFields = ["product_code", "grammage", "shelf_life", "number_of_boxes", "barcode", "manufacturer","sales_link", "page_id"];
            if ($page->technicalInformation) {
                if (collect($request->only($techFields))->filter()->isNotEmpty()) {
                    $tecnicalInformation = $page->technicalInformation->update([
                        "product_code" => $request->product_code,
                        "grammage" => $request->grammage,
                        "shelf_life" => $request->shelf_life,
                        "number_of_boxes" => $request->number_of_boxes,
                        "barcode" => $request->barcode,
                        "manufacturer" => $request->manufacturer,
                        "sales_link" => $request->sales_link,
                        "page_id" => $page->id,
                    ]);
                    $message = "Ürün Teknik Bilgileri Güncellendi";
                } else {
                    $technicalInformation = $page->technicalInformation->delete();
                    $message = "Ürün Teknik Bilgileri Silindi";
                }
            } else {
                if (collect($request->only($techFields))->filter()->isNotEmpty()) {
                    $tecnicalInformation = TechnicalInformation::create([
                        "product_code" => $request->product_code,
                        "grammage" => $request->grammage,
                        "shelf_life" => $request->shelf_life,
                        "number_of_boxes" => $request->number_of_boxes,
                        "barcode" => $request->barcode,
                        "manufacturer" => $request->manufacturer,
                        "sales_link" => $request->sales_link,
                        "page_id" => $page->id,
                    ]);
                    $message = "Ürün teknik bilgileri Kaydedildi";
                }
            }

            $message = "Ürün Teknik Bilgileri Kaydedildi";
            LogService::add("ProductFeaturesService Store", $status, $message);

            $nutriFields = ["energy_kj", "energy_kj_ref", "energy_kcal", "energy_kcal_ref", "total_fat", "total_fat_ref", "saturated_fat", "saturated_fat_ref", "carbohydrate", "carbohydrate_ref", "sugar", "sugar_ref", "fiber", "fiber_ref", "protein", "protein_ref", "salt", "salt_ref"];
            if ($page->nutritionalValues) {
                if (collect($request->only($nutriFields))->filter()->isNotEmpty()) {
                    $nutritionalValues = $page->nutritionalValues->update([
                        "energy_kj" => $request->energy_kj,
                        "energy_kj_ref" => $request->energy_kj_ref,
                        "energy_kcal" => $request->energy_kcal,
                        "energy_kcal_ref" => $request->energy_kcal_ref,
                        "total_fat" => $request->total_fat,
                        "total_fat_ref" => $request->total_fat_ref,
                        "saturated_fat" => $request->saturated_fat,
                        "saturated_fat_ref" => $request->saturated_fat_ref,
                        "carbohydrate" => $request->carbohydrate,
                        "carbohydrate_ref" => $request->carbohydrate_ref,
                        "sugar" => $request->sugar,
                        "sugar_ref" => $request->sugar_ref,
                        "fiber" => $request->fiber,
                        "fiber_ref" => $request->fiber_ref,
                        "protein" => $request->protein,
                        "protein_ref" => $request->protein_ref,
                        "salt" => $request->salt,
                        "salt_ref" => $request->salt_ref,
                        "page_id" => $page->id,
                    ]);
                    $message = "Ürün Besin Değerleri Güncellendi";
                } else {
                    $nutritionalValues = $page->nutritionalValues->delete();
                    $message = "Ürün Besin Değer Bilgileri Silindi";
                }
            } else {
                if (collect($request->only($nutriFields))->filter()->isNotEmpty()) {
                    $nutritionalValues = NutritionalValues::create([
                        "energy_kj" => $request->energy_kj,
                        "energy_kj_ref" => $request->energy_kj_ref,
                        "energy_kcal" => $request->energy_kcal,
                        "energy_kcal_ref" => $request->energy_kcal_ref,
                        "total_fat" => $request->total_fat,
                        "total_fat_ref" => $request->total_fat_ref,
                        "saturated_fat" => $request->saturated_fat,
                        "saturated_fat_ref" => $request->saturated_fat_ref,
                        "carbohydrate" => $request->carbohydrate,
                        "carbohydrate_ref" => $request->carbohydrate_ref,
                        "sugar" => $request->sugar,
                        "sugar_ref" => $request->sugar_ref,
                        "fiber" => $request->fiber,
                        "fiber_ref" => $request->fiber_ref,
                        "protein" => $request->protein,
                        "protein_ref" => $request->protein_ref,
                        "salt" => $request->salt,
                        "salt_ref" => $request->salt_ref,
                        "page_id" => $page->id,
                    ]);
                    $message = "Ürün Besin Değerleri Kaydedildi";
                }
            }

            LogService::add("ProductFeaturesService Store", $status, $message);
            $message = "Ürün teknik bilgileri ve besin değerleri kaydedildi";
            return ["status" => $status, "message" => $message, "pageId" => $mainPageId];

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Ürün Bilgileri Kaydedilemedi';
            $page = Page::findOrFail($id);
            $mainPageId = $page->parentCategory->id;
            LogService::add("ProductFeaturesService Store", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message, "pageId" => $mainPageId];

        }

    }

    public function packagingStore(Request $request, $id)
    {
        $status = 'success';
        $message = 'Kaydedildi';

        try {
            $page = Page::findOrFail($id);
            $mainPageId = $page->parentCategory->id;
            $packaging = Packaging::create([
                "product_code" => $request->product_code,
                "grammage" => $request->grammage,
                "number_of_boxes" => $request->number_of_boxes,
                "sales_link" => $request->sales_link,
                "page_id" => $page->id
            ]);
            LogService::add("ProductFeaturesService Packaging Store", $status, $message);
            return ["status" => $status, "message" => $message, "pageId" => $mainPageId];

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Paketleme Bilgisi Kaydedilemedi';

        }
    }

    public function packagingDestroy($id)
    {
        $status = 'success';
        $message = 'Paketleme Kaydı Silindi';
        try {
            $packaging = Packaging::findOrFail($id);
            $packaging->delete();
            LogService::add("ProductFeaturesService Packaging Destroy", $status, $message);
            return ["status" => $status, "message" => $message];
        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Paketleme Kaydı Silinemedi';
            LogService::add("ProductFeaturesService Packaging Destroy", $status, $message . " => " . $exception->getMessage());
            return ["status" => $status, "message" => $message];
        }
    }

}
