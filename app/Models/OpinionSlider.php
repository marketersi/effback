<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionSlider extends Model
{
    use HasFactory;
    protected $table = 'opinion_hero_slider';
    protected $fillable = ['type', 'message'];
}
