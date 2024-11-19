<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingOptionModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_pricing_option_content';
    protected $fillable = ['type', 'message'];
}
