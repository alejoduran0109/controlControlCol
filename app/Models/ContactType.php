<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactType
 * 
 * @property int $CONTACT TYPE ID
 * @property string|null $CONTACT DESCRIPTION
 *
 * @package App\Models
 */
class ContactType extends Model
{
	protected $table = 'contact type';
	protected $primaryKey = 'CONTACT TYPE ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CONTACT TYPE ID' => 'int'
	];

	protected $fillable = [
		'CONTACT DESCRIPTION'
	];
}
