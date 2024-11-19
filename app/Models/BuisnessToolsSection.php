<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuisnessToolsSection extends Model
{
    use HasFactory;
    protected $table = 'tbl_buisnesstools_section';
    protected $fillable = [
        'type',
        'message',
    ];
}
