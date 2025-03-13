<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'app_tags';

    protected $fillable = [
        'tag_pixel',
        'tag_google',
    ];

}