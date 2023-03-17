<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Testprep;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

use App\Models\Testprep\PackageMaster;


/**
 * Class StudentPackage
 * 
 * @property int $student_package_id
 * @property int $student_id
 * @property int $programe_id
 * @property int $test_module_id
 * @property string|null $contact
 * @property string|null $email
 * @property int $package_id
 * @property string|null $payment_id
 * @property string|null $order_id
 * @property int|null $amount
 * @property string|null $currency
 * @property string|null $status
 * @property string|null $captured
 * @property string|null $method
 * @property int $active
 * @property float $paper_left
 * @property string|null $created_at
 * @property string|null $subscribed_on
 * @property string|null $expired_on
 * @property Carbon $requested_on
 *
 * @package App\Models\Base
 */
class StudentPackage extends Model
{
    protected $connection = 'mysql_testprep';
    protected $table = 'student_package';
    protected $primaryKey = 'student_package_id';
    protected $perPage = 10;
    public $timestamps = false;

    protected $casts = [
        'student_id' => 'int',
        'programe_id' => 'int',
        'test_module_id' => 'int',
        'package_id' => 'int',
        'amount' => 'int',
        'active' => 'int',
        'paper_left' => 'float'
    ];

    // protected $dates = [
    //  'requested_on'
    // ];

    public function student()
    {
       return $this->belongsTo(Student::class);
    }

    public function package_master()
    {
       return $this->belongsTo(PackageMaster::class,'package_id','package_id');
    }

    public function getExpiredOnAttribute($value)
    {
        
        return date('d M y',strtotime($value));
    }
}
