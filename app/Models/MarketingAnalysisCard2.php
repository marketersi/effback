<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingAnalysisCard2 extends Model
{
    use HasFactory;
    protected $table = 'mrkt_analysis_card_2';
    protected $fillable = ['type', 'message'];
}
