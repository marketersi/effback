<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesContentFaqQA extends Model
{
    use HasFactory;
    protected $table = 'tbl_faq_ques_ans';
    protected $fillable = [
        'faq_ques',
        'faq_ans',
    ];
}
