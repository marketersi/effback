<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSetting extends Model
{
    use HasFactory;
    protected $table = 'tbl_team_setting';
//     protected $fillable = ['main_title', 'sub_title' ,'first_image' ,'para_one', 'para_two' ,'para_three' , 'section_title_one' ,'section_subtitle_one','section_one_para_one','section_one_para_two'
// ,'section_one_img' ,'section_two_title','section_two_subtitle','section_two_image', 'section_two_para' ,'section_two_animalimg','section_three_header', 'section_three_subheader' ,'section_four_para','section_five_title','section_five_imgone',
// 'section_five_imgtwo','section_five_bgimage','section_five_para','section_five_paratwo'];
protected $fillable = [
    'type' ,'message'
];

}
