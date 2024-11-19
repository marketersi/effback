<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionExperts extends Model
{
    use HasFactory;
    protected $table = 'opinion_experts';
    protected $fillable = [ 'type', 'message' ];
}
