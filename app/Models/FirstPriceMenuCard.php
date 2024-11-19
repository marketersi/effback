<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstPriceMenuCard extends Model
{
    use HasFactory;
    protected $table = 'tbl_first_price_menu';
    protected $fillable = [
        'type',
        'message',
        // 'menu_title',
        // 'section1_title',
        // 'section1_subtitle',
        // 'section1_buttonText',
        // 'meta_title',
        // 'meta_info',
        // 'meta_button1Text',
        // 'meta_button2text',
        // 'section2_title',
        // 'section2_buttonText	',
        // // 'range_label',
        // // 'range_description',
        // 'section3_title',
        // 'section3_subtitle1',
        // 'section3_subtitle2',
        // 'section4_title',
        // 'section4_subtitle',
        // 'status',
    ];

}
