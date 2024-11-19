<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthPriceCardDropdwonOption extends Model
{
    use HasFactory;
    protected $table = 'tbl_fourthpricecard_dropdwonoption';
    protected $fillable = [
        'value',
        'label',
    ];
}
