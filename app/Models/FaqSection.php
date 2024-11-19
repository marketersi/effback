<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqSection extends Model
{
    use HasFactory;
    protected $table = "tbl_faq_section";
    protected $fillable = ['title'];
}
