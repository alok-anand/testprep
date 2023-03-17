<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class MultiStepLogin extends Model
{
    use HasFactory;

    protected $table = 'multi_step_logins';

    protected $connection = 'mysql_testprep';

    public $timestamps = false;

    protected $fillable = ['purpose', 'country','intake','persue','education','cgpa','passing','passport','test_taken','cusname','mobile','email','name'];
     
    


}
