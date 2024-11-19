<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterPageLink extends Model
{
    use HasFactory;
    protected $table = 'tbl_footer_page_links';
    protected $fillable = ['label','content'];
}
