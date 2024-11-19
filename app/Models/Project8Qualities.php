<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project8Qualities extends Model
{
    use HasFactory;
    protected $table = 'tbl_project8_qualities';
    protected $fillable = [
        'type',
        'message',
    ];
}
