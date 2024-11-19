<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSection6 extends Model
{
    use HasFactory;
    protected $table = 'tbl_projectsection_6';
    protected $fillable = [
        'type',
        'message',
    ];
}
