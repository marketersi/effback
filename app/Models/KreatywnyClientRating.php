<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreatywnyClientRating extends Model
{
    use HasFactory;
    protected $table = 'tbl_kreatywny_client_rating';
    protected $fillable = ['type', 'message'];
}
