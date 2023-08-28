<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nrp','email','name','class','day','timein','timeout','subject',
    ];
}
