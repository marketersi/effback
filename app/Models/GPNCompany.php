<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPNCompany extends Model
{
    use HasFactory;
    protected $table = 'tbl_gpn_company_logo';
    protected $fillable = ['image'];
}
