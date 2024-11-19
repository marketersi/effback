<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionReferencesCard extends Model
{
    use HasFactory;
    protected $table = 'opinion_reference_cards';
    protected $fillable = [ 'customer_name', 'customer_designation', 'rating_no', 'review' ]; 
}
