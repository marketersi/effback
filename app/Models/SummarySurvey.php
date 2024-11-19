<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SummarySurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_summary' ;
    protected $fillable = ['type','message'] ;
}
