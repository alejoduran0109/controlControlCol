<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sector
 * 
 * @property int $SECTOR ID
 * @property string|null $SECTOR NAME
 * 
 * @property Collection|Customer[] $customers
 *
 * @package App\Models
 */
class Sector extends Model
{
	protected $table = 'sector';
	protected $primaryKey = 'SECTOR ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SECTOR ID' => 'int'
	];

	protected $fillable = [
		'SECTOR NAME'
	];

	public function customers()
	{
		return $this->hasMany(Customer::class, 'SECTOR ID');
	}
}
