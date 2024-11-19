<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project7CustomerReview extends Model
{
    use HasFactory;
    protected $table = 'tbl_project_7_customerreview';
    protected $fillable = [
        'type',
        'message',
    ];
}
