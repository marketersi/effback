<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionReferences extends Model
{
    use HasFactory;
    protected $table = 'opinion_reference_contents';
    protected $fillable = [ 'type', 'message' ]; 
}
