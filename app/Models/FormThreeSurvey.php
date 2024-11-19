<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormThreeSurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_form_3' ;
    protected $fillable = ['type','message'] ;
}
