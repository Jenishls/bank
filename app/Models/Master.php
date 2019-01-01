<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
	public $table = 'Master';

	// public function scopeNoLock($query)
	// {
	//     return $query->from(\DB::raw(self::getTable() . ' with (nolock)'));
	// }

}
