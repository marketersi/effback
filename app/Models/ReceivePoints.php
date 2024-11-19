<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceivePoints extends Model
{
    use HasFactory;
    protected $table = 'tbl_receive_points';
    protected $fillable = ['point'];
}
