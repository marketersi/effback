<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedProject extends Model
{
    use HasFactory;
    protected $table = 'tbl_project';
    protected $fillable = ['type', 'message'];
}
