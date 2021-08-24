<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Types extends Model
{
    protected $table = 'menu_types';

    protected $fillable = ['
    name
    email
    email_verified_at
    password
    phone'];

    public $timestamps = true;
}
