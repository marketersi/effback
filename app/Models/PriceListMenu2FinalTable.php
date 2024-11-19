<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceListMenu2FinalTable extends Model
{
    use HasFactory;
    protected $table = 'pricelist_menu2_finaltable';
    
    protected $fillable = [ 
        'tbl_firstpricecard_dropdwonoption_id',
        'tbl_first_price_range_id',
        'section3_inputbox',
        'prlist_menu2_dropdown_1_id', 
        'prlist_menu2_dropdown_2_id', 
        'prlist_menu2_dropdown_3_id',
        'prlist_menu2_dropdown_4_id',
        'tbl_thirdpricecard_dropdwonoption_id',
        'tbl_third_price_range_id',
        'tbl_fourthpricecard_dropdwonoption_id',
        'section1_inputbox',
        'tbl_fourth_price_range_id',
        'section3_textarea',
        'section4_name',
        'section4_email',
        'section4_phone',
        'section4_website',
        'additional_input',
    ];
}
