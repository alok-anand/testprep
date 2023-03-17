<?php

namespace App\Models\Testprep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class Enquiry extends Model
{
    use HasFactory; 

    protected $table = 'enquires';

    protected $connection = 'mysql_testprep';



    // protected $fillable = ['name', 'email', 'moblle','program_type','demo_type','branch_name','meetingtime'];

    public $timestamps = ["created"]; //only want to used created_at column
    const UPDATED_AT = null; //and updated by default null set

   // public $timestamps = [ "created_at" ];

    //const CREATED_AT = 'added';

    public function new_enquiry(Request $request)
    {
        $data['enquiry_type'] = $form_id;
        $this->create($request->all());

    }

}
