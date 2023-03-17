<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class StudentPackageTransaction extends Model
{
    use HasFactory;

    protected $table = 'student_package_transaction';

    protected $connection = 'mysql_testprep';

    public $timestamps = false;
   



}
