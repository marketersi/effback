<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstPriceCardDropdwonOption extends Model
{
    use HasFactory;
    protected $table = 'tbl_firstpricecard_dropdwonoption';
    protected $fillable = [
        'option',
    ];
}
