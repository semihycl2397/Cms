<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id';
    protected $fillable = ['
   video_url
   user_id
   is_published'];

    public $timestamps = true;
}
