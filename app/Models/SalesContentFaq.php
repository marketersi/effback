<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesContentFaq extends Model
{
    use HasFactory;
    protected $table = 'tbl_salescontent_faq';
    protected $fillable = [
        'type',
        'message',
    ];
}
