<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','link','details'];

    /**
     * Kategori resimlerinin tutulduğu klasör yolunu getirir
     * @return string
     */
    public function getImagePath()
    {
        return asset('storage/' . Config::get('constants.brands_path'));
    }

    /**
     * Kategori resminin yolunu getirir.
     * @return string
     */
    public function getImage()
    {
        return asset('storage/' . Config::get('constants.brands_path') . '/' . $this->image);
    }

    /**
     * Kategorinin resmininin yolunu getirir. Eğer resim yoksa false değeri getirir.
     * @return false|string
     */
    public function image()
    {
        if ($this->image) {
            return asset("storage/" . config('constants.brands_path') . "/" . $this->image);
        }
        return false;
    }
}
