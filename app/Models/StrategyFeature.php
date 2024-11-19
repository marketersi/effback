<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategyFeature extends Model
{
    use HasFactory;
    protected $table = 'strategy_feature_list';
    protected $fillable = ['item_number', 'image_url', 'title', 'paragraph_1', 'paragraph_2'];
}
