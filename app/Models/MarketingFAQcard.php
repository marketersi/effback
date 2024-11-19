<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingFAQcard extends Model
{
    use HasFactory;
    protected $table = 'mrkt_faq_card';
    protected $fillable = ['question', 'answer', 'image_url'];
}
