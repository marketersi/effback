<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_result_card';
    protected $fillable = ['title', 'image_url'];
}
