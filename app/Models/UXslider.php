<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXslider extends Model
{
    use HasFactory;
    protected $table = 'ux_slider_section';
    protected $fillable = ['Image'];
}
