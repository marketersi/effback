<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneCompanyCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_company_card';
    protected $fillable = ['main_title', 'subtitle'];
}
