<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PercentageCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_percentage_card';
    protected $fillable = [
        'percentage_value',
        'title',
        'website',
        'category',
    ];
}
