<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingHero extends Model
{
    use HasFactory;
    protected $table = 'tbl_marketing_hero';
    protected $fillable = ['type', 'message'];
}
