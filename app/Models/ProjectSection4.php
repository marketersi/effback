<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSection4 extends Model
{
    use HasFactory;
    protected $table = 'tbl_projectsection_4';
    protected $fillable = [
        'type',
        'message',
    ];
}
