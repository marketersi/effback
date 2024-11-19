<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IwdSection5 extends Model
{
    use HasFactory;
    protected $table = 'tbl_iwd_section_5';
    protected $fillable = ['type', 'message'];
}
