<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSection9 extends Model
{
    use HasFactory;
    protected $table = 'tbl_taem_sec9_cards';

    protected $fillable = [
        'image' ,'name' ,'designation','quate_one','card_text'
    ];
}
