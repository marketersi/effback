<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactusMessage extends Model
{
    use HasFactory;
    protected $table = 'tbl_contactus_message';
    protected $fillable = [
        'name',
        'email',
        'message',
        'telephone',
    ];
}
