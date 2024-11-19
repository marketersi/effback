<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IwdSection7 extends Model
{
    use HasFactory;
    protected $table = 'tbl_iwd_section_7';
    protected $fillable = ['type', 'message'];
}
