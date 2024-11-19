<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjektowanieLogo extends Model
{
    use HasFactory;
    protected $table = 'tbl_projektowanie_logo';
    protected $fillable = ['type', 'message'];
}
