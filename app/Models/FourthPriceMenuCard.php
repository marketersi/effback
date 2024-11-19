<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthPriceMenuCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_fourth_price_menu';
    protected $fillable = [
        'type',
        'message',
    ];
}
