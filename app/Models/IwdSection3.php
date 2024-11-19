<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IwdSection3 extends Model
{
    use HasFactory;
    protected $table = 'tbl_iwd_section_3';
    protected $fillable = ['type', 'message'];
}
