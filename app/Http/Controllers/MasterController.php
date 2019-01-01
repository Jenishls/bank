<?php

namespace App\Http\Controllers;
use App\Models\Master;
use App\User;
use App\Models\ConstantTable;
use Illuminate\Http\Request;
use ActiveDirectory;

class MasterController extends Controller
{
	public function index(){
		$user = new ActiveDirectory\User();
		// dd($user->loadConfig())); 
		// dd($_SERVER);
		$depo = self::depo1(self::reval(),self::code()) + self::depo2(self::reval(),self::code());
		$adServer = "nccbank.com.np";
	  $ldap = ldap_connect($adServer);
	  return view('home.index',compact('depo'));
	}

	public function reval(){
		$reval = \DB::table('ControlTable(NOLOCK)')
  							->select('Reval_A','Reval_B')
  							->first();
		return $reval; 		
	}

	public function code(){
	  $code = \DB::table('ConstantTable(NOLOCK)')
						->select('CRateCode')
						->first();
		return $code;				
	}

	public function depo1($reval,$code){
	  $data = \DB::select(" select 
								SUM(ROUND(CONVERT(MONEY, ISNULL(M.Balance,0) * ((".$reval->Reval_A." * BuyRate) + (SellRate * ".$reval->Reval_B."))),2)) AS Balance 
								from Master(NOLOCK) M,CurrRateTable(NOLOCK) R
								where AcType in ('04','05','06','15','48','07','08','09','10','11','12','13','14','16','17','18','19','0A','0B','0D','0E','0G','04','05','06','15','48','0C','0Z') 
								and ( IsBlocked<>'C'	OR  (IsBlocked = 'C' AND M.Balance <> 0))
								and M.Balance>=0
								AND R.RateCode = '".$code->CRateCode."'             
								AND R.CyCode1 = '01'             
								AND M.CyCode=R.CyCode2 ");
	   return $data[0]->Balance;
	}

	public function depo2($reval,$code){
	  $data = \DB::select(" select 
													 SUM(ROUND(CONVERT(MONEY, ISNULL(M.DealAmt,0) * ((".$reval->Reval_A." * BuyRate) + (SellRate * ".$reval->Reval_B."))),2)) AS Balance
													 from DealTable M(NOLOCK),CurrRateTable R (NOLOCK)
													where (AcType between '40' and '49') and DealAmt <>0
													AND R.RateCode ='".$code->CRateCode."'             
													AND R.CyCode1 = '01'             
													AND M.CyCode=R.CyCode2   ");
	   return $data[0]->Balance;
	}


}
// IntraNet netintra321.
