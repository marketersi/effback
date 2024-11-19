<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFourSurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_form_4' ;
    protected $fillable = ['type','message'] ;
}
