<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneIwdSection2 extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_iwd_section_2';
    protected $fillable = ['type', 'message'];
}
