<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aico extends Model
{
    use HasFactory;
    protected $table = 'tbl_aico';
    protected $fillable = ['type','message'];
}
