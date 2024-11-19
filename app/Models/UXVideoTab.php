<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXVideoTab extends Model
{
    use HasFactory;
    protected $table = 'ux_info_video_tab';
    protected $fillable = ['video', 'title'];
}
