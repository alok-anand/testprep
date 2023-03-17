<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Testprep;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
/**
 * Class StudentsEtracsPayment
 * 
 * @property int $id
 * @property int $etracs_retain_payment_id
 * @property int $programe_id
 * @property int $test_module_id
 * @property string $course_type
 * @property int $student_id
 * @property int $mprep_student_id
 * @property int $consultancy_type_id
 * @property Carbon $duration_from
 * @property Carbon $duration_to
 * @property Carbon $date_joining
 * @property int $payment_status
 * @property int $is_apporoved
 * @property int $latest_status
 * @property string $remarks
 * @property Carbon $created
 * @property Carbon $modified
 *
 * @package App\Models\Base
 */
class StudentsEtracsPayment extends Model
{
	protected $connection = 'mysql_testprep';
	protected $table = 'students_etracs_payments';
	protected $perPage = 10;
	public $timestamps = false;

	protected $casts = [
		'etracs_retain_payment_id' => 'int',
		'programe_id' => 'int',
		'test_module_id' => 'int',
		'student_id' => 'int',
		'mprep_student_id' => 'int',
		'consultancy_type_id' => 'int',
		'payment_status' => 'int',
		'is_apporoved' => 'int',
		'latest_status' => 'int'
	];

	protected $dates = [
		'duration_from',
		'duration_to',
		'date_joining',
		'created',
		'modified'
	];
	public function student_payment_status_offline()
	{

		 $student =Auth::guard('testprepwebstudent')->user();
		 dd($student->id);
	}
}
