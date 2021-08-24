<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $fillable = ['
    ust_menu_id
    type_id
    order
    user_id
    is_active
    is_header
    is_footer
    content_id
    name
    username
    e-mail
    phone
    dob'];

    public $timestamps = true;
}
