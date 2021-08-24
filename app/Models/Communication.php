<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    protected $table = 'communication';

    protected $fillable = ['
    name
    email
    email_verified_at
    password
    phone'];

    public $timestamps = true;
}
