<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountType
 * 
 * @property int $ACCOUNT TYPE ID
 * @property string|null $ACCOUNT TYPE NAME
 *
 * @package App\Models
 */
class AccountType extends Model
{
	protected $table = 'account type';
	protected $primaryKey = 'ACCOUNT TYPE ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ACCOUNT TYPE ID' => 'int'
	];

	protected $fillable = [
		'ACCOUNT TYPE NAME'
	];
}
