<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class TestModule extends Model
{
    use HasFactory;

    protected $table = 'test_module';

    protected $connection = 'mysql_testprep';

    // protected $fillable = ['name', 'email', 'moblle','program_type','demo_type','branch_name','meetingtime'];

    public $timestamps = false;
   // public $timestamps = [ "created_at" ];

    //const CREATED_AT = 'added';



}
