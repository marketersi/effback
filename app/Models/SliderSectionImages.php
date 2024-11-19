<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderSectionImages extends Model
{
    use HasFactory;
    protected $table = 'tbl_slider_section_images';
    protected $fillable = [
        'type',
        'message',
    ];
}
