<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uximage extends Model
{
    use HasFactory;
    protected $table = 'tbl_ux_images';
    protected $fillable = [
        'title', 
        'image'
    ];
}
