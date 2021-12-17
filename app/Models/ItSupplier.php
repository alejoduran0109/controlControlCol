<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItSupplier
 * 
 * @property int $SUPPLIER ID
 * @property string|null $SUPPLIER NAME
 *
 * @package App\Models
 */
class ItSupplier extends Model
{
	protected $table = 'it supplier';
	protected $primaryKey = 'SUPPLIER ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SUPPLIER ID' => 'int'
	];

	protected $fillable = [
		'SUPPLIER NAME'
	];
}
