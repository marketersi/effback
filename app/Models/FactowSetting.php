<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactowSetting extends Model
{
    use HasFactory;
    protected $table = 'tbl_factow_setting';
    protected $fillable = ['type', 'message'];
}
