<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    protected $table = 'communication';
    protected $primaryKey = 'id';
    protected $fillable = ['
    name
    email
    title
    phone
    message'];

    public $timestamps = true;
}
