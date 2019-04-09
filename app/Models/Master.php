<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;
class Master extends Model
{
	public $table = 'Master';

	// public function scopeNoLock($query)
	// {
	//     return $query->from(\DB::raw(self::getTable() . ' with (nolock)'));
	// }

	public function branch(){
		return $this->belongsTo(Branch::class,'BranchCode');
	}

}
