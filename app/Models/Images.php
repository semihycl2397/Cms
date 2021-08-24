<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = ['
   images_url
   '];

    public $timestamps = true;
}
