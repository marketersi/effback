<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjektowanieProject extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_value';
    protected $fillable = ['type' , 'message'];
}
