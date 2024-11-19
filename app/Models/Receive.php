<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receive extends Model
{
    use HasFactory;
    protected $table = 'tbl_receive';
    protected $fillable = ['type' , 'message'];
}
