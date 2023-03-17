<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Testprep\CourseCurriculum;

class CourseCurriculum extends Model
{
    use HasFactory;

    protected $table = 'course_curriculum';

    protected $connection = 'mysql_testprep';

    // protected $fillable = ['name', 'email', 'moblle','program_type','demo_type','branch_name','meetingtime'];

    public $timestamps = false;
   // public $timestamps = [ "created_at" ];

    //const CREATED_AT = 'added';

    /**
     * Get all of the deployments for the project.
     */
    public function curriculum(): HasMany
    {
         return $this->hasMany(CourseCurriculum::class,'parent_id','id')->where('status',1);
    }
 


}
