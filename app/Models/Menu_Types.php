<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Types extends Model
{
    protected $table = 'menu_types';
    protected $primaryKey = 'id';
    protected $fillable = ['
    name
   locale'];

    public $timestamps = true;
}
