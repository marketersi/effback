<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSection3Content extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_3_content';
    protected $fillable = [
        'type',
        'message',
    ];
}
