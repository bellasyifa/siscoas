<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coas extends Model
{
    protected $fillable = [
        'nrp',
        'name',
        'class',
        'subject',
        'day',
        'timein',
        'timeout',
        'email',
    ];
}
