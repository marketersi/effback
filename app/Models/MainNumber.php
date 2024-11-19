<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNumber extends Model
{
    use HasFactory;
    protected $table = 'tbl_main_number';
    protected $fillable = ['type', 'message'];
}
