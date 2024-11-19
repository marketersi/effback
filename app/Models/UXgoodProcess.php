<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXgoodProcess extends Model
{
    use HasFactory;
    protected $table = 'ux_good_process';
    protected $fillable = [ 'type', 'message' ];
}
