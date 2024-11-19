<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionAccordian2 extends Model
{
    use HasFactory;
    protected $table = 'opinion_accordian_2';
    protected $fillable = [ 'type', 'message' ];
}
