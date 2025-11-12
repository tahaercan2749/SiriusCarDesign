<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'page_id', 'published'];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

}
