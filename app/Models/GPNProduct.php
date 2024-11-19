<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPNProduct extends Model
{
    use HasFactory;
    protected $table = 'tbl_gpn_product_logo';
    protected $fillable = ['image'];
}
