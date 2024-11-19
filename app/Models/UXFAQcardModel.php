<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXFAQcardModel extends Model
{
    use HasFactory;
    protected $table = 'ux_faq_card';
    protected $fillable = ['question', 'answer'];
}
