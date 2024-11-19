<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreatywnyIwdSection5 extends Model
{
    use HasFactory;
    protected $table = 'tbl_kreatywny_iwd_section_5';
    protected $fillable = ['type', 'message'];
}
