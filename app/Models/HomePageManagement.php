<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePageManagement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["title", "content", "image_link", "video_link", "page_id","deleted_at"];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

}
