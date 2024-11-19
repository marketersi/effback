<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class POForm2Options extends Model
{
    use HasFactory;
    protected $table = 'pricing_option_form2_dropdown';
    protected $fillable = [ 'dropdown_1_options', 'dropdown_2_options'];
}
