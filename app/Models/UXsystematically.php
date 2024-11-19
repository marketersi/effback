<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UXsystematically extends Model
{
    use HasFactory;
    protected $table = 'ux_systematically_section';
    protected $fillable = [ 'type', 'message'];
}
