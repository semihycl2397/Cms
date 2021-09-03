<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'info',
        'adress',
        'phone',
    ];
    protected $table= 'site_config';

}
