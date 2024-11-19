<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingBranding extends Model
{
    use HasFactory;
    protected $table = 'mrkt_branding';
    protected $fillable = ['type', 'message'];
}
