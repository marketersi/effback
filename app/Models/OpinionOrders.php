<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionOrders extends Model
{
    use HasFactory;
    protected $table = 'opinion_order';
    protected $fillable = [ 'type', 'message' ];
}
