<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesjonalneFeedbackSummary extends Model
{
    use HasFactory;
    protected $table = 'tbl_profesjonalne_feedback_summary';
    protected $fillable = ['type', 'message'];
}
