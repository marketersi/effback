<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowTestWorks extends Model
{
    use HasFactory;
    protected $table = "tbl_how_test_works";
    protected $fillable = ['type' , 'message' ];
}

