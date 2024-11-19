<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'tbl_brand_section';
    // protected $fillable = [
    //     'brand_image1', 
    //     'brand_image2', 
    //     'banner_image', 
    //     'brand_logo1', 
    //     'brand_logo2', 
    //     'banner_text'
    // ];
    protected $fillable = [
        'type', 
        'message'
    ];
}
