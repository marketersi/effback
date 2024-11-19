<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterLogo extends Model
{
    use HasFactory;
    protected $table = 'tbl_footer_logo';
    protected $fillable = ['type','message'];
}