<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingPriceTitle extends Model
{
    use HasFactory;
    protected $table = 'mrkt_price_section_title';
    protected $fillable = ['type', 'message'];
}
