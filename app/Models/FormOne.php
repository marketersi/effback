<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormOne extends Model
{
    use HasFactory;
    protected $table = 'tbl_pricing_option_form_1';
    protected $fillable = ['type', 'message'];
}
