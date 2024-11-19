<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondPriceCardDropdownOption3 extends Model
{
    use HasFactory;
    protected $table = 'prlist_menu2_dropdown_3';
    protected $fillable = [ 'value', 'lable' ];
}
