<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'title', 'description', 'keywords', 'url', 'head', 'body', 'imglink', 'status',
    ];
}
