<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondPriceCardDropdownOption2 extends Model
{
    use HasFactory;
    protected $table = 'prlist_menu2_dropdown_2';
    protected $fillable = [ 'value', 'lable' ];
}
