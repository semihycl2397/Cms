<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'Images';
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
   'images_url'
    ];

    public $timestamps = true;
}
