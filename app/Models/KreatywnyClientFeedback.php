<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreatywnyClientFeedback extends Model
{
    use HasFactory;
    protected $table = 'tbl_kreatywny_client_feedback';
    protected $fillable = ['type', 'message'];
}
