<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXFAQModel extends Model
{
    use HasFactory;
    protected $table = 'ux_faq_title';
    protected $fillable = ['type', 'message'];
}
