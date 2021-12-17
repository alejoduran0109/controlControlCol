<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $CUSTOMER ID
 * @property int|null $ACCOUNT TYPE ID
 * @property int|null $LBO ID
 * @property int|null $SECTOR ID
 * @property int|null $COVERAGE LEVEL ID
 * @property int|null $NIT
 * @property string|null $CUSTOMER BUSINESS NAME
 * @property string|null $BUSINESS GROUP
 * @property string|null $HOLDING COMPANY
 * @property int|null $TOTAL OPERATING REVENUE
 * @property int|null $TOTAL ASSETS
 * @property int|null $TOTAL EQUITY
 * @property int|null $TOTAL LIABILITIES
 * @property int|null $EBITDA
 * @property int|null $OPERATING PROFIT (EBIT)
 * @property int|null $NET PROFIT OR LOSS
 * @property int|null $FOUNDATION DATE
 * @property int|null $AMMOUNT OF EMPLOYEES
 * @property string|null $TOP EXECUTIVES
 * @property string|null $BUSINESS DESCRIPTION
 * @property string|null $SHAREHOLDERS
 * @property string|null $BRANCH
 * @property string|null $CITY
 * @property string|null $STATE
 * @property string|null $ADDRESS
 * @property string|null $BUSINESS PHONE NUMBER
 * @property string|null $BUSINESS FAX NUMBER
 * @property string|null $BUSINESS EMAIL
 * @property string|null $BUSINESS WEB SITE
 * @property int|null $INTERNATIONAL OPS
 * @property bool|null $CHALLENGE
 * @property bool|null $ACCOUNT PLAN
 * 
 * @property Lbo|null $lbo
 * @property Sector|null $sector
 * @property Collection|AccountCustomer[] $account_customers
 * @property Collection|ContactInformation[] $contact_informations
 * @property Collection|CurrentService[] $current_services
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customer';
	protected $primaryKey = 'CUSTOMER ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CUSTOMER ID' => 'int',
		'ACCOUNT TYPE ID' => 'int',
		'LBO ID' => 'int',
		'SECTOR ID' => 'int',
		'COVERAGE LEVEL ID' => 'int',
		'NIT' => 'int',
		'TOTAL OPERATING REVENUE' => 'int',
		'TOTAL ASSETS' => 'int',
		'TOTAL EQUITY' => 'int',
		'TOTAL LIABILITIES' => 'int',
		'EBITDA' => 'int',
		'OPERATING PROFIT (EBIT)' => 'int',
		'NET PROFIT OR LOSS' => 'int',
		'FOUNDATION DATE' => 'int',
		'AMMOUNT OF EMPLOYEES' => 'int',
		'INTERNATIONAL OPS' => 'int',
		'CHALLENGE' => 'bool',
		'ACCOUNT PLAN' => 'bool'
	];

	protected $fillable = [
		'ACCOUNT TYPE ID',
		'LBO ID',
		'SECTOR ID',
		'COVERAGE LEVEL ID',
		'NIT',
		'CUSTOMER BUSINESS NAME',
		'BUSINESS GROUP',
		'HOLDING COMPANY',
		'TOTAL OPERATING REVENUE',
		'TOTAL ASSETS',
		'TOTAL EQUITY',
		'TOTAL LIABILITIES',
		'EBITDA',
		'OPERATING PROFIT (EBIT)',
		'NET PROFIT OR LOSS',
		'FOUNDATION DATE',
		'AMMOUNT OF EMPLOYEES',
		'TOP EXECUTIVES',
		'BUSINESS DESCRIPTION',
		'SHAREHOLDERS',
		'BRANCH',
		'CITY',
		'STATE',
		'ADDRESS',
		'BUSINESS PHONE NUMBER',
		'BUSINESS FAX NUMBER',
		'BUSINESS EMAIL',
		'BUSINESS WEB SITE',
		'INTERNATIONAL OPS',
		'CHALLENGE',
		'ACCOUNT PLAN'
	];

	public function lbo()
	{
		return $this->belongsTo(Lbo::class, 'LBO ID');
	}

	public function sector()
	{
		return $this->belongsTo(Sector::class, 'SECTOR ID');
	}

	public function account_customers()
	{
		return $this->hasMany(AccountCustomer::class, 'CUSTOMER ID');
	}

	public function contact_informations()
	{
		return $this->hasMany(ContactInformation::class, 'CUSTOMER ID');
	}

	public function current_services()
	{
		return $this->hasMany(CurrentService::class, 'CUSTOMER ID');
	}
}
