<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExaminationHeroSection extends Model
{
    use HasFactory;
    protected $table = "tbl_examination_hero_section";
    protected $fillable = ['type', 'message'];
}
