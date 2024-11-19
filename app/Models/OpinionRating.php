<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionRating extends Model
{
    use HasFactory;
    protected $table = 'opinion_rating';
    protected $fillable = [ 'type', 'message' ]; 
}
