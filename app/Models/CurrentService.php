<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CurrentService
 * 
 * @property int $CURRENT SERVICE ID
 * @property int|null $CUSTOMER ID
 * @property int|null $SERVICE ID
 * @property int|null $SUPPLIER ID
 * @property int|null $MANUFACTURER ID
 * @property string|null $SERVICE DESCRIPTION
 * @property int|null $CIS NUMBER
 * @property Carbon|null $DUE DATE
 * 
 * @property Customer|null $customer
 *
 * @package App\Models
 */
class CurrentService extends Model
{
	protected $table = 'current service';
	protected $primaryKey = 'CURRENT SERVICE ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CURRENT SERVICE ID' => 'int',
		'CUSTOMER ID' => 'int',
		'SERVICE ID' => 'int',
		'SUPPLIER ID' => 'int',
		'MANUFACTURER ID' => 'int',
		'CIS NUMBER' => 'int'
	];

	protected $dates = [
		'DUE DATE'
	];

	protected $fillable = [
		'CUSTOMER ID',
		'SERVICE ID',
		'SUPPLIER ID',
		'MANUFACTURER ID',
		'SERVICE DESCRIPTION',
		'CIS NUMBER',
		'DUE DATE'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'CUSTOMER ID');
	}
}
