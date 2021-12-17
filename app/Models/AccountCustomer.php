<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountCustomer
 * 
 * @property int $ACCUSTOMER ID
 * @property int|null $ACCOUNT ID
 * @property int|null $CUSTOMER ID
 * 
 * @property Customer|null $customer
 *
 * @package App\Models
 */
class AccountCustomer extends Model
{
	protected $table = 'account customer';
	protected $primaryKey = 'ACCUSTOMER ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ACCUSTOMER ID' => 'int',
		'ACCOUNT ID' => 'int',
		'CUSTOMER ID' => 'int'
	];

	protected $fillable = [
		'ACCOUNT ID',
		'CUSTOMER ID'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'CUSTOMER ID');
	}
}
