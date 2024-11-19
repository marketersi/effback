<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneRating extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_rating_section';
    protected $fillable = ['type', 'message'];
}

