<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Testprep\User;
use App\Models\Testprep\Batch;

class RecordedLecturesLink extends Model
{
    use HasFactory;

    protected $table = 'recorded_lectures_links';

    protected $connection = 'mysql_testprep';

    protected $primaryKey = 'recorded_lecture_id';

    protected $fillable = ['lecture_topic', 'lecture_link', 'batch_id','instructor_id','instructor_name','lecture_date','status'];

    public $timestamps = false;

     public function User()
    {
        
       return $this->hasOne(User::class,'instructor_id','id')->where('active',1);;

    }
    public function Batch()
    {
        
       return $this->hasOne(Batch::class,'batch_id','batch_id')->where('status','active');;

    }

// $uq = "SELECT * FROM " . $db_prefix . "recorded_lectures_links where batch_id='".$batch_id."' AND status= 'active' ";
    // public  function getDemoRecordedLecturesLink(){

    //     return   $this->where('batch_id',)
    //                 ->where('cms_page.type',$type)
    //                 ->orderBy('cms_page.displayorder','asc')
    //                 ->get();

    // }


}
