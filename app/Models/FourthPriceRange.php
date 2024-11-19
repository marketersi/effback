<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthPriceRange extends Model
{
    use HasFactory;
    protected $table = 'tbl_fourth_price_range';
    protected $fillable = [
        'label',
        'description',
        'backgroundColor',
    ];
}
