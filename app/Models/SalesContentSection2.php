<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesContentSection2 extends Model
{
    use HasFactory;
    protected $table = 'tbl_salescontent_section2';
    protected $fillable = [
        'type',
        'message',
    ];
}
