<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandTitle extends Model
{
    use HasFactory;
    protected $table = 'tbl_opinion_brand_title';
    protected $fillable = ['type','message'];
}
