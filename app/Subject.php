<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'semester' ,
        'name',
        'credits',
        'code',
        'created_at',
        'updated_at'
    ];
}
