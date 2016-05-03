<?php
/**
 * @file
 * Currency Model.
 *
 * All DecimaAccounting code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\DecimaAccounting\System;

use Eloquent;

class VoucherType extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'SYS_Voucher_Type';

	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = array('id');

}
