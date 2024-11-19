<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionReferencesImage extends Model
{
    use HasFactory;
    protected $table = 'opinion_reference_image';
    protected $fillable = [ 'image', 'name', 'year' ];
}
