<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfCopy extends Model
{
    use HasFactory;
    protected $table = 'tbl_pdf_copy';
    protected $fillable = ['type' , 'message'];
}
