<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model\TestSeries;


class StudentResult extends Model
{
    use HasFactory;

    protected $table = 'student_results';

    protected $connection = 'mysql_testprep';

    // protected $fillable = ['name', 'email', 'moblle','program_type','demo_type','branch_name','meetingtime'];

    public $timestamps = false;
   // public $timestamps = [ "created_at" ];

    const CREATED_AT = 'created';
    const MODIFIED_AT = 'modified';
    // public function test_series()
    // {
    //     $this->belongsTo(TestSeries::class);
    // }

    // public function getMocktests($student_id,$category= 'Listening',$test_type = NULL,$order = 'asc')
    // {
        
    //     $student_results =   $this->select('student_results.created as stu_created','band_score')
    //                 ->leftJoin('test_seriese','test_seriese.test_seriese_id','=','student_results.test_seriese_id')
    //                 ->where('test_seriese.is_MtEt',$test_type)
    //                 ->where('student_results.student_id',$student_id)
    //                 ->where('student_results.collection_no','LIKE','%'.$category.'%')
    //                 ->where('student_results.paper_checked',1)
    //                 ->orderBy('student_results.created','desc')
    //                 ->get();
                    
    //     return $student_results;
        
    // }

    public function getStudentResultsDatewise($student_id,$test_type = 'Practice',$order='asc')
    {
        $test_type = ($test_type=='Mock')?2:NULL;
        $categories = array('Listening','Reading','Writing','Speaking');
        $output = array();
        foreach ( $categories as $category) {
           $output[$category] = $this->getStudentResultsQuery($student_id,$category,$test_type,$order)->toArray();
        }
        //dd($output);
       return $output;

    }


    public function getStudentResultsQuery($student_id,$category= NULL,$test_type = NULL,$order = 'asc')
    {
        //DB::connection('mysql_testprep')->enableQueryLog();
        $student_results =   $this->select('student_results.created as stu_created','band_score')
                    ->leftJoin('test_seriese','test_seriese.test_seriese_id','=','student_results.test_seriese_id')
                    ->where('test_seriese.is_MtEt',$test_type)
                    ->where('student_results.student_id',$student_id)
                    ->when($category, function ($query, $category) {
                    $query->where('collection_no','LIKE','%'.$category.'%');
                    })
                    //->where('student_results.collection_no','LIKE','%'.$category.'%')
                    ->where('student_results.paper_checked',1)
                    ->orderBy('student_results.created',$order)
                    ->get();
                    //dd($student_results);
       // dd(DB::connection('mysql_testprep')->getQueryLog());
        return $student_results;
        //dd($student_results->toArray());

        

        // $query = "SELECT  student_results.created AS stu_created, band_score as band_score FROM  student_results  LEFT JOIN students on students.id = student_results.student_id LEFT JOIN ts_cat_assoc ON ts_cat_assoc.ts_cat_assoc_id = student_results.ts_cat_assoc_id LEFT join category_masters on category_masters.category_id = ts_cat_assoc.category_id LEFT join test_seriese on test_seriese.test_seriese_id = student_results.test_seriese_id AND student_results.collection_no LIKE  :category where students.id = :student_id  and student_results.paper_checked = 1  AND  test_seriese.is_MtEt = 2 order by  student_results.created asc"; 

        // $results = DB::connection('mysql_testprep')->select($query , ['category'=>'%'.$category.'%','student_id'=>$student_id]);
        // dd($results);
        //print_r($results);
        //dd(DB::connection('mysql_testprep')->getQueryLog());
         //dd($results->toArray());
        
       // return $this->pageinfo = $output;
    }

    //latest results of two tests

    public function scopePopular($query)
    {
        return $query->where('votes', '>', 100);
    }

    //accessor
    public function getStuCreatedAttribute($value)
    {
        
        return date('d M y h:m:s',strtotime($value));
    }

}
