<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXinfo extends Model
{
    use HasFactory;
    protected $table = 'ux_info_section';
    protected $fillable = [ 'type', 'message' ];
}
