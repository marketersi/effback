<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneClientFeedback extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_client_feedback';
    protected $fillable = ['type', 'message'];
}
