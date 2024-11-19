<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandOne extends Model
{
    use HasFactory;
    protected $table = 'tbl_opinion_brand_1';
    protected $fillable = ['brand_title','image'];
}
