<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeShops extends Model
{
    use HasFactory;
    protected $table = 'tbl_free_shops';
    protected $fillable = ['type','message'];
}
