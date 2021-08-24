<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    protected $table = 'metas';

    protected $fillable = ['
    name
    email
    email_verified_at
    password
    phone'];

    public $timestamps = true;
}
