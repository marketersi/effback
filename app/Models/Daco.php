<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daco extends Model
{
    use HasFactory;
    protected $table = 'tbl_daco';
    protected $fillable = ['type' , 'message'];
}
