<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingWhatReceive extends Model
{
    use HasFactory;
    protected $table = 'mrkt_what_receive';
    protected $fillable = ['type', 'message'];
}
