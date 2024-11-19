<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneClientRating extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_client_rating';
    protected $fillable = ['type', 'message'];
}
