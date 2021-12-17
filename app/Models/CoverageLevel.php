<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoverageLevel
 * 
 * @property int $COVERAGE LEVEL ID
 * @property string|null $COVERAGE LEVEL NAME
 *
 * @package App\Models
 */
class CoverageLevel extends Model
{
	protected $table = 'coverage level';
	protected $primaryKey = 'COVERAGE LEVEL ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'COVERAGE LEVEL ID' => 'int'
	];

	protected $fillable = [
		'COVERAGE LEVEL NAME'
	];
}
