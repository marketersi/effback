<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project7Content extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_7_content';
    protected $fillable = [
        'type',
        'message',
    ];
}
