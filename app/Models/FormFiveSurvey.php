<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormFiveSurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_form_5' ;
    protected $fillable = ['title','textbelowInput','listHeading','listItems'] ;
}
