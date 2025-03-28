<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicySection extends Model
{
    use HasFactory;
    protected $table = 'tbl_policy_section';
    protected $fillable = [
        'type',
        'message',
    ];
}
