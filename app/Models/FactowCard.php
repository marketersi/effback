<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactowCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_factow_card';
    protected $fillable = ['title', 'image_url', 'description1', 'description2', 'description3'];
}
