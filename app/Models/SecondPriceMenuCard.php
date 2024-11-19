<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondPriceMenuCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_second_price_menu';
    protected $fillable = [ 'type', 'message' ];
}
