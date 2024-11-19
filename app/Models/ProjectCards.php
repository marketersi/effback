<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCards extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_card';
    protected $fillable = ['title', 'info', 'catagory', 'flag_logo_1', 'flag_logo_2', 'banner_image'];
}
