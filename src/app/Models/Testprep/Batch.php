<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Testprep\User;

use App\Models\Testprep\Branch;

class Batch extends Model
{
    use HasFactory;

    protected $table = 'batches';

    protected $connection = 'mysql_testprep';

    protected $primaryKey = 'batch_id';
    
    public $timestamps = false;

    public function User()
    {
        
      return $this->belongsTo(User::class,'instructor_id');

    }

    public function Branch()
    {
        
      return $this->belongsTo(Branch::class,'batch_id','center_id');

    }


}
