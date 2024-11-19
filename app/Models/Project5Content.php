<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project5Content extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_5_content';
    protected $fillable = [
        'type',
        'message',
    ];
}
