<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderSectionContent extends Model
{
    use HasFactory;
    protected $table = 'tbl_slider_section_content';
    protected $fillable = [
        'type',
        'message',
    ];
}
