<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultTableTitle extends Model
{
    use HasFactory;
    protected $table = 'tbl_result_table_title';
    protected $fillable = ['type', 'message'];
}
