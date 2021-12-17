<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItService
 * 
 * @property int $SERVICE ID
 * @property string|null $SERVICE NAME
 *
 * @package App\Models
 */
class ItService extends Model
{
	protected $table = 'it service';
	protected $primaryKey = 'SERVICE ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SERVICE ID' => 'int'
	];

	protected $fillable = [
		'SERVICE NAME'
	];
}
