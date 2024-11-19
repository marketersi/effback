<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondPriceCardDropdownOption4 extends Model
{
    use HasFactory;
    protected $table = 'prlist_menu2_dropdown_4';
    protected $fillable = [ 'value', 'lable' ];
}
