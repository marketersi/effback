<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class POForm1Options extends Model
{
    use HasFactory;
    protected $table = 'pricing_option_form1_dropdown';
    protected $fillable = [ 'dropdown_1_options', 'dropdown_2_options'];
}
