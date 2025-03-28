<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFeedback extends Model
{
    use HasFactory;
    protected $table = 'tbl_client_feedback';
    protected $fillable = ['type', 'message'];
}
