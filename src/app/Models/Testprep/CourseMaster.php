<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class CourseMaster extends Model
{
    use HasFactory;

    protected $table = 'course_master';

    protected $connection = 'mysql_testprep';

    public $timestamps = false;

    // protected $fillable = ['name', 'email', 'moblle','program_type','demo_type','branch_name','meetingtime'];

    
   // public $timestamps = [ "created_at" ];

    //const CREATED_AT = 'added';

    /**
     * Get all of the deployments for the project.
    
    public function CourseCurriculum(): HasManyThrough
    {
        return $this->hasManyThrough(
            CourseCurriculum::class, 
            CourseCurriculum::class,
            'parent_id',
            'id',
            'id',
            'course_id'

        );
    }
 */


}
