<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionReview extends Model
{
    use HasFactory;
    protected $table = 'opinion_review_section';
    protected $fillable = ['client_image', 'client_logo', 'rating_no', 'client_name', 'designation', 'paragraph'];
}
