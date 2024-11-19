<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneBrand extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_brand_section';
    protected $fillable = [
        'type', 
        'message'
    ];
}
