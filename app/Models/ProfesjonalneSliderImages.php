<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneSliderImages extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_slider_images';
    protected $fillable = ['type', 'message'];
}
