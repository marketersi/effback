<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultacjaDropdown2 extends Model
{
    use HasFactory;
    protected $table = 'konsultacja_form_dropdown_2';
    protected $fillable = [ 'value', 'lable' ];
}
