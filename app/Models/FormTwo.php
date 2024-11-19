<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormTwo extends Model
{
    use HasFactory;
    protected $table = 'tbl_pricing_option_form_2';
    protected $fillable = ['type', 'message'];
}
