<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingTitle extends Model
{
    use HasFactory;
    protected $table = 'tbl_opinion_rating_title';
    protected $fillable = ['type','message'];
}
