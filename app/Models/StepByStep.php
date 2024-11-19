<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepByStep extends Model
{
    use HasFactory;
    protected $table = 'tbl_step_by_step';
    protected $fillable = ['type','message'];
}
