<?php

namespace App\Models\Testprep;

//use Illuminate\Database\Eloquent\Factories\HasFactory;


use App\Models\Testprep\Batch;


use Illuminate\Foundation\Auth\User as Authenticatable;

class TestprepAuthStudent extends Authenticatable
{
   

    protected $table = 'students';

    protected $guard = 'tesprepstudents';


    protected $connection = 'mysql_testprep';

    
}
