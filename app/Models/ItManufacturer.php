<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItManufacturer
 * 
 * @property int $MANUFACTURER ID
 * @property string|null $MANUFACTURER NAME
 *
 * @package App\Models
 */
class ItManufacturer extends Model
{
	protected $table = 'it manufacturer';
	protected $primaryKey = 'MANUFACTURER ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MANUFACTURER ID' => 'int'
	];

	protected $fillable = [
		'MANUFACTURER NAME'
	];
}
