<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionBrilliantJob extends Model
{
    use HasFactory;
    protected $table = 'opinion_brilliant_job';
    protected $fillable = ['image_url', 'review', 'video_url', 'client_name', 'client_designation', 'rating'];
}
