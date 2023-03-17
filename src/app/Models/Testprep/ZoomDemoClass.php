<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class ZoomDemoClass extends Model
{
    use HasFactory;

    protected $table = 'zoom_demo_class';

    protected $connection = 'mysql_testprep';

    protected $fillable = ['name', 'email', 'moblle','program_type','demo_type','branch_name','meetingtime'];

    public $timestamps = false;



}
