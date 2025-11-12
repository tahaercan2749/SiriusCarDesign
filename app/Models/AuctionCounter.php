<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionCounter extends Model
{
    use HasFactory;
    protected $casts = [
        'start_date' => 'datetime',
        'end_date'   => 'datetime',
    ];
    protected $fillable = ['name', 'location', 'start_date', 'end_date', 'form', 'active'];
}
