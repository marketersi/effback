<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatorSettings extends Model
{
    use HasFactory;
    protected $table = 'tbl_calculator_setting';
    protected $fillable = [
        'type',
        'message',
    ];
}
