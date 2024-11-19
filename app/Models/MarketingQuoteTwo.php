<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingQuoteTwo extends Model
{
    use HasFactory;
    protected $table = 'mrkt_quote_two';
    protected $fillable = ['type', 'message'];
}
