<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_Permission extends Model
{
    protected $table = 'role_permission';

    protected $fillable = ['
   role_id
   permission_id'];

    public $timestamps = true;
}
