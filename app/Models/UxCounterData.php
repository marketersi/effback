<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UxCounterData extends Model
{
    use HasFactory;
    protected $table = 'tbl_ux_counterdata';
    protected $fillable = [
        'image', 
        'description'
    ];
}
