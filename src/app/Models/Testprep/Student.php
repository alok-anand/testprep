<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\Testprep\Batch;

use App\Models\Testprep\StudentResult;

use App\Models\Testprep\StudentPackage;



class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

   


    protected $connection = 'mysql_testprep';

    
        /**

     * The model's default values for attributes.

     *

     * @var array

     */

    protected $attributes = [

        'oauth_uid' => '',
        'residential_address' =>'',
        'oauth_provider' =>'',
        'student_verify'=>0,
        'token' =>'',
        'fname'=>'',
        'lname'=>'',
        'dob' =>'',
        'batch_id'=>0,
        'country_id'=>'+91',
        'active'=>0

    ];

    protected $fillable =
    ['mobile','email','canam_student_id','token','student_verify','fname','lname','dob','active','password'];
    public $timestamps = false;
   // public $timestamps = [ "created_at" ];


    //const CREATED_AT = 'added';

    //Relation ship Failed
    // public function batch()
    // {
    //    //return $this->belongsTo(Batch::class,'batch_id','batch_id');
    //   
    // }

    //  public function student_results()
    // {
    //    return $this->hasMany(StudentResult::class);
    // }

     public function student_active_package()
    {
       return $this->hasOne(StudentPackage::class)->where('active',1)->where('amount','!=',0);
    }

}
