<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lbo
 * 
 * @property int $LBO ID
 * @property string|null $LBO NAME
 * 
 * @property Collection|Customer[] $customers
 *
 * @package App\Models
 */
class Lbo extends Model
{
	protected $table = 'lbo';
	protected $primaryKey = 'LBO ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'LBO ID' => 'int'
	];

	protected $fillable = [
		'LBO NAME'
	];

	public function customers()
	{
		return $this->hasMany(Customer::class, 'LBO ID');
	}
}
