<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Testprep;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PackageMaster
 * 
 * @property int $package_id
 * @property string $package_name
 * @property string|null $package_color
 * @property string|null $icon
 * @property int|null $star_count
 * @property string $package_desc
 * @property int $no_of_mocktest
 * @property int $no_of_practest
 * @property float $amount
 * @property string $duration
 * @property int|null $programe_id
 * @property int|null $test_paper_limit
 * @property int|null $test_module_id
 * @property int $active
 * @property int|null $by_user
 * @property Carbon $created
 * @property Carbon $modified
 *
 * @package App\Models\Base
 */
class PackageMaster extends Model
{
	protected $connection = 'mysql_testprep';
	protected $table = 'package_masters';
	protected $primaryKey = 'package_id';
	protected $perPage = 10;
	public $timestamps = false;

	protected $casts = [
		'star_count' => 'int',
		'no_of_mocktest' => 'int',
		'no_of_practest' => 'int',
		'amount' => 'float',
		'programe_id' => 'int',
		'test_paper_limit' => 'int',
		'test_module_id' => 'int',
		'active' => 'int',
		'by_user' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];
}
