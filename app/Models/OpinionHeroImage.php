<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionHeroImage extends Model
{
    use HasFactory;
    protected $table = 'opinion_hero_section';
    protected $fillable = [ 'type','message' ]; 
}
