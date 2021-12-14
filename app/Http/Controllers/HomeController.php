<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \Carbon\Carbon;
use App\Transaction;
use App\Customerinfo;
use App\Generalledger;
use App\Quickloan;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $deposit = $withdrawal = $custno = $balance = 0;
        if(Auth::user()->role == "Marketer"){

        $date = Carbon::now()->format('Y-m-d');
        $offid = Generalledger::select('balance')->where('officer',Auth::user()->username)->first();
        $balance =  $offid['balance'];
   
      

        $reff = Transaction::select('cr')->where('postcode',"CTD")->where('postedby',Auth::user()->username)->get();
        $ref = count($reff);

        for ($i = 0 ; $i < $ref; $i++) { 
        $deposit += $reff[$i]['cr'];
        }

        $reff = Transaction::select('dr')->where('postcode',"CTW")->where('postedby',Auth::user()->username)->get();
        $ref = count($reff);

        for ($i = 0 ; $i < $ref; $i++) { 
        $withdrawal += $reff[$i]['dr'];
        }

        $reff = Customerinfo::all()->where('createdby',Auth::user()->username);
        $custno = count($reff);

    }else{
         $balance = Customerinfo::select('balance')->sum('balance');

    //       $offid = Generalledger::select('balance')->where('name',"Vault")->get();
    //      if($offid->isNotEmpty()){
    //      $balance =  $offid[0]['balance'];
    //  }else{
    //     $balance = 0;
    //  }
         $reff = Customerinfo::all();
         if($reff->isNotEmpty()){
         $custno = count($reff);
     }else{
        $custno = 0;
     }

         $reff = Transaction::select('cr')->where('postcode',"CTD")->get();
         if($reff->isNotEmpty()){
         $ref = count($reff);
          for ($i = 0 ; $i < $ref; $i++) { 
         $deposit += $reff[$i]['cr'];
         }
           }else{
        $deposit = 0;
     }

        


        $reffx = Transaction::select('dr')->where('postcode',"CTW")->get();
         if($reffx->isNotEmpty()){
         $refx = count($reffx);
        for ($i = 0 ; $i < $refx; $i++) { 
        $withdrawal += $reffx[$i]['dr'];
        }}else{
           $withdrawal = 0 ; 
        }


    }



    $role = Auth::user()->role;
        switch ($role) {
            case 'Credit':
                $code =  0 ;
                break;
            case 'Control':
                $code =  1 ;
                break;
            case 'Fincon':
                $code =  2 ;
                break;
            case 'Md':
                $code =  3 ;
                break;
            default:
                $code =  4 ;
                break;
        }

     $new = Quickloan::all()->where('stage','!=',4);
     $gen = Quickloan::all()->where('stage',4);
     $pend =  count($new);
     $all = count($gen);
     $cabal =  Customerinfo::where('createdby', Auth::user()->username)->sum('balance');
$passbook = Generalledger::select('balance')->where('name',"Passbook")->first();
$commission = Generalledger::select('balance')->where('name',"Commission")->first();

       return view('dashboard')->with('cabal',$cabal)->with('balance',$balance)->with('deposit',$deposit)->with('withdrawal',$withdrawal)->with('customers',$custno)->with('pending',$pend)->with('all',$all)->with('commission',$commission['balance'])->with('passbook',$passbook['balance']);


    }





public function currentbalancereport(){
$result = User::select('username','firstname')->where('role',"Marketer")->get();
$data = [];

//return $result;

for ($i = 0 ; $i <  count($result) ; $i++) { 

$username =  $result[$i]['username'];
$firstname =  $result[$i]['firstname'];
$balance = Customerinfo::where('createdby', $username)->sum('balance');
$data[] = [
'officer' => $firstname,
'amount' => $balance
];
}
return view('currentbalancereport')->with('userx',$data);
}





public function totaldepositreport(){
$result = User::all()->where('role',"Marketer");
$result = User::select('username','firstname')->where('role',"Marketer")->get();
$data = [];
for ($i = 0 ; $i <  count($result) ; $i++) { 
$username =  $result[$i]['username'];
$firstname =  $result[$i]['firstname'];
$balance = Transaction::where('postedby', $username)->where('postcode', "CTD")->sum('cr');
$data[] = [
'officer' => $firstname,
'amount' => $balance
];
}
return view('totaldepositreport')->with('userx',$data);
}


 
 public function totalwithdrawalreport()
{
$result = User::all()->where('role',"Marketer");
$result = User::select('username','firstname')->where('role',"Marketer")->get();
$data = [];
for ($i = 0 ; $i <  count($result) ; $i++) { 
$username =  $result[$i]['username'];
$firstname =  $result[$i]['firstname'];
$balance = Transaction::where('postedby', $username)->where('postcode', "CTW")->sum('dr');
$data[] = [
'officer' => $firstname,
'amount' => $balance
];
}
return view('totalwithdrawalreport')->with('userx',$data);
}
 
 
 
public function allcustomerreport()
{
$result = User::all()->where('role',"Marketer");
$result = User::select('username','firstname')->where('role',"Marketer")->get();
$data = [];
for ($i = 0 ; $i <  count($result) ; $i++) { 
$username =  $result[$i]['username'];
$firstname =  $result[$i]['firstname'];
$balance = Customerinfo::where('createdby', $username)->count('id');
$data[] = [
'officer' => $firstname,
'amount' => $balance
];
}
return view('totalcustomerreport')->with('userx',$data);
}


public function totalpassbookreport()
{
$result = User::all()->where('role',"Marketer");
$result = User::select('username','firstname')->where('role',"Marketer")->get();
$data = [];
for ($i = 0 ; $i <  count($result) ; $i++) { 
$username =  $result[$i]['username'];
$firstname =  $result[$i]['firstname'];
$balance = Transaction::where('accountofficer', $username)->where('postcode', "PBK")->sum('dr');
$data[] = [
'officer' => $firstname,
'amount' => $balance
];
}
return view('totalpassbookreport')->with('userx',$data);
}


public function totalcommissionreport()
{
$result = User::all()->where('role',"Marketer");
$result = User::select('username','firstname')->where('role',"Marketer")->get();
$data = [];
for ($i = 0 ; $i <  count($result) ; $i++) { 
$username =  $result[$i]['username'];
$firstname =  $result[$i]['firstname'];
$balance = Transaction::where('postedby', $username)->where('postcode', "COM")->sum('dr');
$data[] = [
'officer' => $firstname,
'amount' => $balance
];
}
return view('totalcommissionreport')->with('userx',$data);
}


}
