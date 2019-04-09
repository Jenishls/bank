<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Master;

class Branch extends Model
{
    public $table = "BranchTable";

    public function master(){
    	return $this->hasMany(Master::class,'BranchCode');
    }
}
