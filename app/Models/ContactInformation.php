<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactInformation
 * 
 * @property int $CONTACT ID
 * @property int|null $CUSTOMER ID
 * @property int|null $CONTACT TYPE ID
 * @property string|null $NOMBRE DEL CONTACTO
 * @property string|null $CARGO DEL CONTACTO
 * @property string|null $TELEFONO
 * @property string|null $EXT
 * @property string|null $CELULAR
 * @property string|null $EMAIL
 * @property string|null $FECHA DE CUMPLEAÑOS
 * 
 * @property Customer|null $customer
 *
 * @package App\Models
 */
class ContactInformation extends Model
{
	protected $table = 'contact information';
	protected $primaryKey = 'CONTACT ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CONTACT ID' => 'int',
		'CUSTOMER ID' => 'int',
		'CONTACT TYPE ID' => 'int'
	];

	protected $fillable = [
		'CUSTOMER ID',
		'CONTACT TYPE ID',
		'NOMBRE DEL CONTACTO',
		'CARGO DEL CONTACTO',
		'TELEFONO',
		'EXT',
		'CELULAR',
		'EMAIL',
		'FECHA DE CUMPLEAÑOS'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class, 'CUSTOMER ID');
	}
}
