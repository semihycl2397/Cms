<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Modules extends Model
{
    protected $table = 'menu_modules';
    protected $primaryKey = 'id';
    protected $fillable = ['
    name
    url
    locale'];

    public $timestamps = true;
}
