<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrategyModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_strategy';
    protected $fillable = ['type', 'message'];
}
