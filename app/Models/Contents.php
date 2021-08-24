<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'id';
    protected $fillable = ['
    user_id
    is_published
    is_slider
    order'];

    public $timestamps = true;
}
