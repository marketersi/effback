<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXexecutive extends Model
{
    use HasFactory;
    protected $table = 'ux_executive_section';
    protected $fillable = [ 'type', 'message' ];
}
