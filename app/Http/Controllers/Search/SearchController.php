<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Master;

class SearchController extends Controller
{
  public function getClientName(Request $req){
  	$query = \DB::table('Master')
		    				->select('Name as text','ClientCode as id');

  	if(array_key_exists('term', $req->all()) ){
    	$query = $query->where('Name','like',strtoupper($req->term."%"))
			    				   ->orWhere('Name','like',strtolower($req->term."%"))	
			    				   ->orWhere('Name','like',ucfirst($req->term."%"));
  	}
  	$data = $query->limit(50)->get()->toArray();
  	return $data;
	}
// 5533819

  public function getBranch(Request $req){
  	$query = \DB::table('BranchTable')
  				->select('BranchName as text','BranchCode as id');
  	if(array_key_exists('term', $req->all())){
		$query = $query->where('BranchName','like',strtoupper($req->term."%"))
									 ->orWhere('BranchName','like',strtolower($req->term."%"))	
									 ->orWhere('BranchName','like',ucfirst($req->term)."%");
  	}
		$data=$query->orderBy('BranchName')->get()->toArray();
  	return $data;
	}

  public function getAcType(Request $req){
  	$query = \DB::table('AcTypeTable')
			  				->select('AcTypeDesc as text','AcType as id');
			  				
  	if(array_key_exists('term',$req->all())){
  		$query = $query->where('AcTypeDesc','like', strtoupper($req->term.'%'))
		    					   ->orWhere('AcTypeDesc','like',strtolower($req->term."%"))	
									   ->orWhere('AcTypeDesc','like',ucfirst($req->term)."%");	
  	}
  	$data = $query->limit(50)->orderBy('AcTypeDesc')->get()->toArray();
  	return $data;
	}
}
