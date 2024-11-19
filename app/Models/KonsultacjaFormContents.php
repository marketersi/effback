<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultacjaFormContents extends Model
{
    use HasFactory;
    protected $table = 'konsultacja_form_content';
    protected $fillable = [ 'type', 'message' ];
}
