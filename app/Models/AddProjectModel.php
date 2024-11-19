<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddProjectModel extends Model
{
    use HasFactory;

    protected $table = "tbl_contact_add_project";
    protected $fillable = ['title', 'name', 'image', 'email', 'phone'];

}
