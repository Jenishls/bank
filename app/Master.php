<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
	protected $table = 'migrations';

	// public function scopeNoLock($query)
	// {
 //    return $query->from(\DB::raw(self::getTable() . ' with (nolock)'));
	// }

}
