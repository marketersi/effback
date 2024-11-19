<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtOwonce extends Model
{
    use HasFactory;
    protected $table = 'tbl_opinion_atowone';
    protected $fillable = ['type', 'message'];

}
