<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultMax extends Model
{
    use HasFactory;
    protected $table = 'tbl_result_max';
    protected $fillable = ['type', 'message'];
}
