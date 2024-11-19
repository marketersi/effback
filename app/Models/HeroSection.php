<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    protected $table = 'tbl_hero_section';
    protected $fillable = [
        'title', 
        'subtitle', 
        'description',
        'image_left1', 
        'image_left2', 
        'image_right1', 
        'image_right2',
        'background_video'
    ];
}
