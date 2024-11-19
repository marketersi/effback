<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormThirteenSurvey extends Model
{
    use HasFactory;
    protected $table = 'tbl_survey_form_13' ;
    protected $fillable = ['type','message'] ;
}
