<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class DemoForm extends Model
{
    use HasFactory;

    protected $table = 'demo_form';

    protected $connection = 'mysql_testprep';

    protected $fillable = ['name', 'email', 'phone','city','course','university'];

    //public $timestamps = false;
   // public $timestamps = [ "created_at" ];

    public $timestamps = false;



}
