<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCompanyProfitSlider extends Model
{
    use HasFactory;
    protected $table = 'tbl_new_company_profit_slider';
    protected $fillable = ['image'];
}
