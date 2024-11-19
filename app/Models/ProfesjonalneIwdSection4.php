<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneIwdSection4 extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_iwd_section_4';
    protected $fillable = ['type', 'message'];
}
