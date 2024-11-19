<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowMoreSection extends Model
{
    use HasFactory;
    protected $table = 'tbl_knowmore_section';
    protected $fillable = [
        'type',
        'message',
    ];
}
