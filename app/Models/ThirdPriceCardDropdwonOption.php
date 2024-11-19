<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdPriceCardDropdwonOption extends Model
{
    use HasFactory;
    protected $table = 'tbl_thirdpricecard_dropdwonoption';
    protected $fillable = [
        'value',
        'label'
    ];
}
