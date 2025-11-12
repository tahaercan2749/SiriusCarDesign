<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewsImagesTemp extends Model
{
    use HasFactory;

    protected $fillable = ["temp_token", "image"];

}
