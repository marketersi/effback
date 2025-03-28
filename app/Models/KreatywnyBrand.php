<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KreatywnyBrand extends Model
{
    use HasFactory;
    protected $table = 'tbl_kreatywny_brand_section';
    protected $fillable = [
        'type', 
        'message'
    ];
}
