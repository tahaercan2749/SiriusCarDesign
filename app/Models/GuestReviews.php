<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestReviews extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'comment', 'rating', 'ip', 'status'];

    public function images()
    {
        return $this->hasMany(ReviewsImages::class, 'review_id','id');
    }


}
