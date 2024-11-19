<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreatywnySliderImages extends Model
{
    use HasFactory;
    protected $table = 'tbl_kreatywny_slider_images';
    protected $fillable = ['type', 'message'];
}
