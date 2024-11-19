<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostExamination extends Model
{
    use HasFactory;

    protected $table = 'tbl_post_examination' ;
    protected $fillable = [
        'formZeroInputValue',
        'formOneInputValue',
        'formTwoInputValue',
        'formThreeInputValue',
        'formFourInputValue',
        'selectedRangeValue',
        'selectedOptionValue',
        'selectedRangeValueTwo',
        'formFiveInputValue',
        'selectedOptionValueTwo',
        'formSixInputValue',
        'formSevenInputValue',
    ];
}
