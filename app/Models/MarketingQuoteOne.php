<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingQuoteOne extends Model
{
    use HasFactory;
    protected $table = 'mrkt_quote_one';
    protected $fillable = ['type', 'message'];
}
