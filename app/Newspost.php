<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newspost extends Model
{
    protected $table = 'newspost';
    protected $fillable = [
        'title', 'teaser', 'content','lang'
    ];
}
