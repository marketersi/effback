<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingStrategyAction extends Model
{
    use HasFactory;
    protected $table = 'mrkt_strategy_action';
    protected $fillable = ['type', 'message'];
}
