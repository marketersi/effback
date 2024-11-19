<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project8Content extends Model
{
    use HasFactory;
    protected $table = 'tbl_project8_content';
    protected $fillable = [
        'type',
        'message',
    ];
}
