<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingImageAdvantage extends Model
{
    use HasFactory;
    protected $table = 'mrkt_image_advantage';
    protected $fillable = ['type', 'message'];
}
