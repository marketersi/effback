<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainContent2 extends Model
{
    use HasFactory;
    protected $table = 'tbl_main_content_2';
    protected $fillable = ['type', 'message'];
}
