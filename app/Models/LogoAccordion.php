<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoAccordion extends Model
{
    use HasFactory;
    protected $table = 'tbl_logo_accordion';
    protected $fillable = ['title','content'];
}
