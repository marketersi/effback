<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingAnalysisCard3 extends Model
{
    use HasFactory;
    protected $table = 'mrkt_analysis_card_3';
    protected $fillable = ['type', 'message'];
}
