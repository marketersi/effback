<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    use HasFactory;
    protected $table = 'tbl_price_list_settings';
    protected $fillable = [
        'type',
        'message',
    ];
}
