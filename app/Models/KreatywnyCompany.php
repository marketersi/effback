<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreatywnyCompany extends Model
{
    use HasFactory;
    protected $table = 'tbl_kreatywny_company_section';
    protected $fillable = ['type', 'message'];
}
