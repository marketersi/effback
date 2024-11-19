<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTwoSurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_form_2' ;
    protected $fillable = ['type','message'] ;
}