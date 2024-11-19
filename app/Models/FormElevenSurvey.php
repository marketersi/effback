<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormElevenSurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_form_11' ;
    protected $fillable = ['title','options'] ;
}
