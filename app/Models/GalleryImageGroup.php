<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImageGroup extends Model
{
    use HasFactory;
    protected $table = 'tbl_gallery_image_group';
    protected $fillable = ['image'];
}
