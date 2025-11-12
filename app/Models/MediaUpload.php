<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaUpload extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'file_name'];

    /**
     * Yüklenen Dosyanın yolunu getirir
     * @return string
     */
    public function fileLink()
    {
        return asset("storage/" . config('constants.uploads_path') . "/" . $this->file_name);
    }

}
