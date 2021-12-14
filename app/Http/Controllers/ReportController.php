<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Customerinfo;
use App\Generalledger;
use App\Officerbyreport;
use App\Business;
use App\Cabal;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use Auth;
use Redirect;
use Session;

class ReportController extends Controller
{
   public function __construct()
{
$this->middleware('auth');
}


public function showallofficer()
{
$result = Generalledger::all();
return view('report.allofficer')->with('account',$result);
}


public function alltransactions()
{

//$result = Transaction::orderBy('id','desc')->paginate(100) ;
return view('report.alltransactionsframe');
}

public function searchtrans(Request $request)
{

$request->validate([

    'from'        => 'required|date',
    'to'          => 'required|date',
]);

$from    = Carbon::parse($request->from)->startOfDay()->toDateTimeString(); 
$to      = Carbon::parse($request->to)->endOfDay()->toDateTimeString();

$result  = Transaction::orderBy('id','desc')->orderBy('created_at', 'DESC')->whereBetween('created_at', [$from, $to])->paginate(100) ;
return view('report.alltransactions')->with('report',$result);
}




public function reportbyofficer()
{
$result = Generalledger::all();
return view('report.reportbyofficerframe')->with('account',$result);

}

public function searchofficerreport(Request $request)
{

$request->validate([

    'from'        => 'required|date',
    'to'          => 'required|date',
]);

$from    = Carbon::parse($request->from)->startOfDay()->toDateTimeString(); 
$to      = Carbon::parse($request->to)->endOfDay()->toDateTimeString();
$officer = Input::get('officer');
$date = Carbon::now()->format('Y-m-d');
$result  = Transaction::orderBy('id','desc')->orderBy('created_at', 'DESC')->where('postedby',$officer)->whereBetween('created_at', [$from, $to])->paginate(100) ;

$resultx = Generalledger::all();
return view('report.reportbyofficer')->with('report',$result)->with('account',$resultx);


}


public function searchvoucher(Request $request)
{

$request->validate([

    'from'        => 'required|date',
    'to'          => 'required|date',
]);

$from    = Carbon::parse($request->from)->startOfDay()->toDateTimeString(); 
$to      = Carbon::parse($request->to)->endOfDay()->toDateTimeString();

$date = Carbon::now()->format('Y-m-d');
$result = Cabal::orderBy('created_at', 'DESC')->whereBetween('created_at', [$from, $to])->paginate(100) ;
return view('report.voucher')->with('report',$result)->with('date', $from. "-".$to);
}



//bankoneupload
public function bankoneupload()
{
$result = Generalledger::all()->where('name','!=',"Vault")->where('balance','!=',"0")->where('name','!=',"Commission")->where('name','!=',"Passbook");

if(!$result->isEmpty()){

Session::flash('dbtmsg', "Ensure all account officers tills are debited before generating upload file!");
return $this->showallofficer();
}else{

$date = Carbon::now()->format('Y-m-d');
$result = Cabal::all()->where('created_at', '>',$date);
$sta = Business::latest()->first();
$status = $sta['status'];
return view('report.bankoneupload')->with('report',$result)->with('date',$date)->with('status',$status);
}

}

public function voucher()
{
   $result = Generalledger::all()->where('name','!=',"Vault")->where('balance','!=',"0")->where('name','!=',"Commission")->where('name','!=',"Passbook");

if(!$result->isEmpty()){

Session::flash('dbtmsg', "Ensure all account officers tills are debited before generating upload file!");
return $this->showallofficer();
}else{
$date = Carbon::now()->format('Y-m-d');
$result = Cabal::all()->where('created_at', '>',$date);
return view('report.voucher')->with('report',$result)->with('date',$date);
}
}

}
