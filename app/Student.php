<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
        'file', 
    ];
}
