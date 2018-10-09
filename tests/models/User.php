<?php

namespace Jsdecena\Comments\Tests;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;
}