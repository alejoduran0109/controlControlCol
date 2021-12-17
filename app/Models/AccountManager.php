<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountManager
 * 
 * @property int $ACCOUNT ID
 * @property string|null $ACCOUNT NAME
 *
 * @package App\Models
 */
class AccountManager extends Model
{
	protected $table = 'account manager';
	protected $primaryKey = 'ACCOUNT ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ACCOUNT ID' => 'int'
	];

	protected $fillable = [
		'ACCOUNT NAME'
	];
}
