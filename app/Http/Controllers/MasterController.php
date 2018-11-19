<?php

namespace App\Http\Controllers;
use App\Master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
  // /**
  //  * Create a new controller instance.
  //  *
  //  * @return void
  //  */
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

	public function index(){
	  // $data = User::nolock()
	  // 							->where('BranchCode','003')
	  // 							// ->where('AcType','07')
	  // 							->select('MainCode','AcType','GoodBaln','Name')
	  // 							->skip(500)
	  // 							->take(20)
	  // 							->get();
	  // return view('home.index',compact('data'));
	  $data = Master::all();
	  // return $data;
	  return view('home.index');
	}

}
