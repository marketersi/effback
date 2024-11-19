<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormThree extends Model
{
    use HasFactory;
    protected $table = 'tbl_pricing_option_form_3';
    protected $fillable = ['type', 'message'];
}
