<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXstages extends Model
{
    use HasFactory;
    protected $table = 'ux_good_stages';
    protected $fillable = ['number', 'video_url', 'title', 'subtitle', 'description' ];
}
