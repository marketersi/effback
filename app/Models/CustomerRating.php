<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerRating extends Model
{
    use HasFactory;
    protected $table = 'tbl_rating_customer_review';
    protected $fillable = [
        'type',
        'message',
    ];
}
