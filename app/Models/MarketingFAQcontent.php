<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingFAQcontent extends Model
{
    use HasFactory;
    protected $table = 'mrkt_faq_content';
    protected $fillable = ['type', 'message'];
}
