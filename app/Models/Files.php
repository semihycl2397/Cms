<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';

    protected $fillable = ['
    name
    email
    email_verified_at
    password
    phone'];

    public $timestamps = true;
}
