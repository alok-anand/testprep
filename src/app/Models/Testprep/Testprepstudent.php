<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Testprepstudent extends Authenticatable
{
    use HasFactory;

    protected $guard = "testprepwebstudent";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
       // 'remember_token',
    ];
}