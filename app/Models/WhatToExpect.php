<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatToExpect extends Model
{
    use HasFactory;
    protected $table = 'tbl_what_to_expect';
    protected $fillable = ['type', 'message'];
}
