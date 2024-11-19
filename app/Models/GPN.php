<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPN extends Model
{
    use HasFactory;
    protected $table = 'tbl_gpn_title';
    protected $fillable = ['type','message'];
}
