<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingPriceCard extends Model
{
    use HasFactory;
    protected $table = 'mrkt_price_section_card';
    protected $fillable = ['title', 'subtitle_1', 'description_1', 'subtitle_2', 'description_2', 'bottom_text', 'button_text'];
}
