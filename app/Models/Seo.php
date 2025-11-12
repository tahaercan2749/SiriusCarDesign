<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seo extends Model
{
    use HasFactory;

    protected $fillable = ["title","description","canonical","page_id"];

    public function page()
    {
        return $this->belongsTo(Page::class,"page_id")->select('id','title','slug','image');
    }

    public function canonicalPage()
    {
        return $this->belongsTo(Page::class,"canonical")->select('id','title','slug','image');
    }

}
