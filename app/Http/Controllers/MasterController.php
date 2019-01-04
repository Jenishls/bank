<?php

namespace App\Http\Controllers;
use App\Models\Master;
use App\User;
use App\Models\ConstantTable;
use Illuminate\Http\Request;
use ActiveDirectory;
use Adldap\Laravel\Facades\Adldap;

class MasterController extends Controller
{
	//dsquery user dc=example,dc=com -name username-here*
	public function index(){

		// $data = Master::where('AcType','49')->take(5)->get()->toArray();
		// dd($data);
		// $data = \DB::table('Master')->select('Name as text','ClientCode as id')->take(5)->get()->toArray();
		// dd($data);
		// $ds = ldap_connect('nccbank.com.np',389);
		// ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
		// $dn = 'NCCBANK\TEST';
		// $bind = ldap_bind($ds,$dn,'1234567890');
		// $filter = "(uid=JENISH1416)";
		// $result = ldap_search($ds, "dc=nccbank,dc=com,dc=np", $filter) or exit("unable to search");
		// $entries = ldap_get_entries($ds,$result);
		// dd($entries);
		// Adldap::user()->attempt('NCCBANK\TEST','1234567890');
		// DD($user);
		$depo = self::depo1(self::reval(),self::code()) + self::depo2(self::reval(),self::code());


											// dd($dormant->toArray());
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

	
	public function dormantFetch(Request $req){
		$query = \DB::table('Master as m')
									->whereIn('m.AcType',['07','08','09','0A','0B','0D','0E','13','10','16'])
									->join('BranchTable as b','b.BranchCode','m.BranchCode')
									->join('AcTypeTable as a','a.AcType','m.AcType')
									->where('IsDormant','T')
									->select('m.Name','a.AcTypeDesc','m.GoodBaln','b.BranchName');

		if(array_key_exists('ClientCode', $req->all())){
			$filter = $req->all();
			unset($filter['order']);
			unset($filter['search']);

			foreach ($filter as $key => $val) {
				if(!is_null($val))
					$query = $query->where('m.'.$key, strtoupper($val))
				    					   ->orWhere('m.'.$key,strtolower($val))	
											   ->orWhere('m.'.$key,ucfirst($val));
			}
		}							
		// $query = $query->where('m.AcType','01');
		$dormant = $query->take(50)
										 ->get()->toArray();
										 // dd($dormant);
		 return $dormant;
	}

}
// IntraNet netintra321.
