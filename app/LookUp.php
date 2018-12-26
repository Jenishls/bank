<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LookUp extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    public $table = 'look_ups';
    protected $fillable = ['title','value','desc'];
}
