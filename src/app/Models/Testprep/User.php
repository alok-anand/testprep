<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class User extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $connection = 'mysql_testprep';

    public $timestamps = false;
     
     public function RecordedLecturesLink()
    {
        
      return $this->belongsTo(RecordedLecturesLink::class);

    }


}
