<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyTitle extends Model
{
    use HasFactory;
    protected $table = 'tbl_warranty_title';
    protected $fillable = [
        'type',
        'message',
    ];
}
