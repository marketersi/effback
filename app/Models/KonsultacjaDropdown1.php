<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultacjaDropdown1 extends Model
{
    use HasFactory;
    protected $table = 'konsultacja_form_dropdown_1';
    protected $fillable = [ 'value', 'lable' ];
}
