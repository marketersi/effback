<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarrantyCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_warranty_card';
    protected $fillable = [
        'type',
        'message',
    ];
}
