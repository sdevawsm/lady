<?php

namespace App\Features\Auth\Models;

use App\Features\Shared\Models\BaseModel;

class User extends BaseModel
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


} 