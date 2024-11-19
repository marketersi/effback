<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXwebsite extends Model
{
    use HasFactory;
    protected $table = 'ux_website_section';
    protected $fillable = [ 'type', 'message' ];
}
