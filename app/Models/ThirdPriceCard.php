<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdPriceCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_third_price_menu';
    protected $fillable = [
        'type',
        'message',
    ];
}
