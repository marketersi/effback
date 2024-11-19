<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;
    protected $table = 'tbl_sales_post';
    protected $fillable = ['name','email','phone','message'];
}
