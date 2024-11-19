<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZooGarden extends Model
{
    use HasFactory;
    protected $table = 'tbl_zoo_garden';
    protected $fillable = ['type','message'];
}
