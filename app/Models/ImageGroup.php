<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGroup extends Model
{
    use HasFactory;
    protected $table = 'tbl_image_group';
    protected $fillable = ['image'];
}
