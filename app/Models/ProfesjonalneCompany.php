<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneCompany extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_company_section';
    protected $fillable = ['type', 'message'];
}
