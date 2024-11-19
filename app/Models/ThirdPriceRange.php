<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdPriceRange extends Model
{
    use HasFactory;
    protected $table = 'tbl_third_price_range';
    protected $fillable = [
        'label',
        'description',
        'backgroundColor',
    ];

}
