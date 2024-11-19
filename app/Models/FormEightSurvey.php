<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEightSurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_form_8' ;
    protected $fillable = ['title','description_1','description_2','selectOptions'] ;
}
