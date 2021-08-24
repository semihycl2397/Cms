<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    protected $table = 'metas';
    protected $primaryKey = 'id';
    protected $fillable = ['
   key
   value'];

    public $timestamps = true;
}
