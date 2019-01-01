<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConstantTable extends Model
{
    public $table = 'ConstantTable';

	// public function scopeNoLock($query)
	// {
	//     return $query->from(\DB::raw(self::getTable() . ' with (nolock)'));
	// }

	public function getReval_A(){
	  $reval = \DB::table('ControlTable(NOLOCK)')
						->select('Reval_A')
						->first();
		return $reval->Reval_A;
	}

	public function getReval_B(){
		$reval = \DB::table('ControlTable(NOLOCK)')
						->select('Reval_B')
						->first(); 
		return $reval->Reval_B;
	}
}
