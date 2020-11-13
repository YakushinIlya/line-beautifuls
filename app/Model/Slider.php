<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slide';

    protected $fillable = [
        'alttext', 'imglink', 'idsort'
    ];
}