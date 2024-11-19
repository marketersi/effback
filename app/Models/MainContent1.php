<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainContent1 extends Model
{
    use HasFactory;
    protected $table = 'tbl_main_content_1';
    protected $fillable = ['type', 'message'];

}
