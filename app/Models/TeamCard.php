<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_team_card_1';
    // protected $fillable = ['name', 'designation' ,'image' ,'quate_one', 'card_two_name' ,'card_two_img' , 'card_two_quate'];
    protected $fillable = [
        'type' ,'message'
    ];
}
