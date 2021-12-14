<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customerinfo;
use App\Transaction;
use App\Generalledger;
use App\Officerbyreport;
use App\Business;
use App\Cabal;
use App\User;
use Illuminate\Support\Facades\Input;
use \Carbon\Carbon;
use Auth;
use Redirect;
use Session;


class OperationsController extends Controller
{
    public function __construct()
{
$this->middleware('auth');
$this->middleware('operations');
}





public function ref()
{
$date = Carbon::now();
$year = $date->year;
$month = $date->month;
$day = $date->day;
$refxx = $year.$month.$day; 

$result = Transaction::latest('refrenceno')->first();
$re = $result->count();
if($re > 1){	
  $ref = $result['refrenceno'] + 1 ;
 }else{
 $ref = 1;
  }
return $ref;
}





public function creditform()
{
return view('operations.creditform');
}

public function debitform()
{
return view('operations.debitform');
}




public function processcredit()
{
session()->forget('msg');
$biz = Business::all()->where('status',"Open")->first();

if(!$biz){
Session::flash('messagexxx', "Sorry, business is not closed. Contact Operations !!");
return Redirect::back();
}else{
$glcode = Input::get('code');

if ($glcode =="10000000"){
Session::flash('messagexxx', "Check the account number and try again");
return Redirect::back();
}else{

$result = Generalledger::where('bankone', Input::get('code'))->get();

$re = $result->count();
if(!$re >= 1){	
Session::flash('messagexxx', "No match found!");
}else{
session()->forget('messagexxx');
}
}
}
return view('operations.creditlist')->with('account',$result);

}



public function processcreditform($id)
{

$result = Generalledger::all()->where('id',$id);
return view('operations.processcredit')->with('account',$result);
}


public function postcredit(){

$id = Input::get('aid');
$ref = Generalledger::all()->where('name',"Vault")->first();
$refno = $this->ref();

if (Input::get('amount') > $ref['balance'] ) {

Session::flash('msg', "Vault Insufficent Balance!");
return $this->creditform();

}else{

$namex =  $ref['name'];
$balancex = $ref['balance'] - Input::get('amount');
$idx = $ref['id'] ;


Transaction::create([
'refrenceno' => $refno,
'name' => $namex,
'accountno' => $ref['bankone'],
'dr' => Input::get('amount'),
'cr' => 0,
'balance' =>$balancex ,
'postcode' =>"OCT"  ,
'narration' => Input::get('narration'),
'postedby' => Auth::user()->username,
'accountofficer' =>  "System"
]);

$general = Generalledger::find($idx);
$general->balance = $balancex;
$general->save();



$refz = Generalledger::all()->where('id',$id)->first();

$name =  $refz['name'];
$balancez = $refz['balance'] + Input::get('amount');

Transaction::create([
'refrenceno' => $refno,
'name' => $name,
'accountno' => $refz['bankone'],
'dr' => 0,
'cr' =>Input::get('amount'),
'balance' =>$balancez  ,
'postcode' =>"OCT" ,
'narration' => Input::get('narration'),
'postedby' => Auth::user()->username,
'accountofficer' =>  $name
]);

$general = Generalledger::find($id);
$general->balance = $balancez;
$general->save();


Officerbyreport::create([
'officer' => $namex ,
'customer' => $name,
'accountno' => $ref['bankone'], 
'deposit' => 0,
'withdrawal' => Input::get('amount'),
'balance' => $ref['balance'] - Input::get('amount'),
'posters' => Auth::user()->username ,
]);

Officerbyreport::create([
'officer' => $name ,
'customer' => $namex,
'accountno' => $refz['bankone'], 
'deposit' => Input::get('amount'),
'withdrawal' => 0,
'balance' => $balancez ,
'posters' => Auth::user()->username ,
]);




//This line of code is for the the upload in case of withdrawal

$date = Carbon::now()->format('Y-m-d');
$result = Cabal::all()->where('accountno',$refz['bankone'])->where('created_at', '>',$date)->first();
$amt = Input::get('amount');
$m = Carbon::now()->format('y');
$min = Carbon::now()->format('d');
$flag = $min.$m;


if($result){	

$cab = Cabal::find($result['id']);
$cab->debit = $result['debit']  + $amt; 
$cab->save();

 }else{

Cabal::create([
'title' => $refz['name'],
'accountno' => $refz['bankone'],
'debit' => $amt,
'credit' => 0,
'narration' => "DC - Cash Withdrawal",
'flag' => $flag  
]);
}

$resultxx = Cabal::select('id','credit')->where('accountno', "10080002")->where('created_at', '>',$date)->first();
if($resultxx){

$cabx = Cabal::find($resultxx['id']);
$cabx->credit = $resultxx['credit']  + $amt; 
$cabx->save();

}else{
Cabal::create([
'title' => "Teller",
'accountno' => "10080002",
'debit' => 0,
'credit' => $amt,
'narration' => "DC - Cash Withdrawal",
'flag' => $flag  
]);

}

Session::flash('msg', Input::get('amount')." Credited Successfully To ". $refz['glcode']." , New Balance is N" .number_format($balancez ,2));
return $this->creditform();

}

}



























public function processdebit()
{
session()->forget('msg');
$biz = Business::all()->where('status',"Open")->first();
if(!$biz){
Session::flash('messagexxxx', "Sorry, business is not closed. Contact Operations !!");
return Redirect::back();
}else{
$glcode = Input::get('code');
if ($glcode =="10000000"){
Session::flash('messagexxxx', "Check the account number and try again");
return Redirect::back();
}else{
$result = Generalledger::where('bankone', Input::get('code'))->get();

$re = $result->count();
if(!$re >= 1){	
Session::flash('messagexxxx', "No match found!");
}else{
session()->forget('messagexxxx');
}
}
}
return view('operations.debitlist')->with('account',$result);

}



public function processdebitform($id)
{
$result = Generalledger::all()->where('id',$id);
return view('operations.processdebit')->with('account',$result);
}


public function postdebit(){

$id = Input::get('aid');
$ref = Generalledger::all()->where('id',$id)->first();
$refno = $this->ref();
$amt = Input::get('amount');
if (Input::get('amount') > $ref['balance'] ) {

Session::flash('msgx', "Account officer Insufficent Balance!");
return $this->debitform();

}else{

Customerinfo::where('withdrawable', '=', "Yes")->update(['withdrawable' => "No"]);


$name =  $ref['name'];
$balance = $ref['balance'] - Input::get('amount');

Transaction::create([
'refrenceno' => $refno,
'name' => $name,
'accountno' => $ref['bankone'],
'dr' => Input::get('amount'),
'cr' => 0,
'balance' =>$balance  ,
'postcode' =>"ODT"  ,
'narration' => Input::get('narration'),
'postedby' => Auth::user()->username,
'accountofficer' =>  $name
]);




$general = Generalledger::find($id);
$general->balance = $balance;
$general->save();

$refx = Generalledger::all()->where('name',"Vault")->first();

Transaction::create([
'refrenceno' => $refno,
'name' => $refx['name'],
'accountno' => $refx['bankone'],
'dr' => 0,
'cr' => Input::get('amount'),
'balance' => $refx['balance']  + Input::get('amount'),
'postcode' =>"ODT"  ,
'narration' => Input::get('narration'),
'postedby' => Auth::user()->username,
'accountofficer' =>   $refx['officer'],
]);


$general = Generalledger::find($refx['id']);
$general->balance = $refx['balance']  + Input::get('amount');
$general->save();


Officerbyreport::create([
'officer' => $refx['name'] ,
'customer' => $name,
'accountno' => $refx['bankone'], 
'deposit' => Input::get('amount'),
'withdrawal' => 0,
'balance' => $refx['balance']  + Input::get('amount'),
'posters' => Auth::user()->username ,
]);



Officerbyreport::create([
'officer' => $name ,
'customer' => $refx['name'] ,
'accountno' => $ref['bankone'], 
'deposit' => 0,
'withdrawal' => Input::get('amount'),
'balance' => $balance,
'posters' => Auth::user()->username ,
]);




$this->prepareupload( $ref['bankone'],$amt );

Session::flash('msgx', Input::get('amount')." Debited Successfully from ". $ref['glcode']." , New Balance is N" .number_format($balance ,2));
return $this->debitform();

}

}









public function remapform()
{
$officers = User::all()->where('role',"Marketer");
return view('operations.remapform')->with('officers',$officers);
}


public function remap()
{
 session()->forget('remapmsg');
 Customerinfo::where('createdby', Input::get('oldofficer'))->update(['createdby' => Input::get('newofficer')]);
 Session::flash('remapmsg',"Accounts Remapped Successfully");
 return $this->remapform();
}


public function prepareupload($account,$amt){

$date = Carbon::now()->format('Y-m-d');
$m = Carbon::now()->format('y');
$min = Carbon::now()->format('d');
$flag = $min.$m;

$offid = Generalledger::all()->where('bankone',$account)->first();
$officerid =  $offid['id'];
$accofficer =  $offid['officer'];
$namxx =  $offid['name'];

//code to check if this particular account officer has got some money in commission and update the account officer money
$refcom = Generalledger::all()->where('name',"Officer Com")->where('officer',$accofficer)->first();
$combal =  $refcom['balance'];
$combankone =  $refcom['bankone'];
$comid =  $refcom['id'];

// if($combal > 0){
// 	$amt = $amt - $combal;
// }

$date = Carbon::now()->format('Y-m-d');
$result = Cabal::all()->where('accountno', $account)->where('created_at', '>',$date)->first();


if($result){	

$cab = Cabal::find($result['id']);
$cab->credit = $result['credit']  + $amt; 
$cab->save();

 }else{

Cabal::create([
'title' => $namxx,
'accountno' => $account,
'debit' => 0,
'credit' => $amt,
'narration' => "DC - Cash deposit by ".$offid['officer'],
'flag' => $flag  
]);
}

$resultxx = Cabal::select('id','debit')->where('accountno', "10080002")->where('created_at', '>',$date)->first();
if($resultxx){

$cabx = Cabal::find($resultxx['id']);
$cabx->debit = $resultxx['debit']  + $amt; 
$cabx->save();

}else{
Cabal::create([
'title' => "Teller",
'accountno' => "10080002",
'debit' => $amt,
'credit' => 0,
'narration' => "DC - Cash Deposit",
'flag' => $flag  
]);

}



//These line of codes is just to post into the main Commission Glo and Update account office GL

if($combal > 0){
$date = Carbon::now()->format('Y-m-d');
$resultz = Cabal::all()->where('accountno', $combankone)->where('created_at', '>',$date)->first();
//this is for the account officer leg
if($resultz){	
$cab = Cabal::find($resultz['id']);
$cab->debit = $resultz['debit']  + $combal; 
$cab->save();

 }else{

Cabal::create([
'title' => $namxx,
'accountno' => $account,
'debit' => $combal,
'credit' => 0,
'narration' => "DC - Commission from ".$accofficer." customers",
'flag' => $flag  
]);
}
$general = Generalledger::find($comid);
$general->balance = 0;
$general->save();



// this for the total commission leg
$resultzd = Cabal::select('id','credit')->where('title', "DC - Commission")->where('created_at', '>',$date)->first();
if($resultzd){
$cabx = Cabal::find($resultzd['id']);
$cabx->credit = $resultzd['credit']  + $combal; 
$cabx->save();

}else{

Cabal::create([
'title' => "DC - Commission",
'accountno' => "40020011",
'debit' => 0,
'credit' => $combal,
'narration' => "DC - Commission",
'flag' => $flag  
]);
}
$maincom = Generalledger::all()->where('name',"Commission")->first();
$general = Generalledger::find($maincom['id']);
$general->balance = $maincom['balance'] + $combal;
$general->save();


}

}













//passbook





public function passbook($id){

$date = Carbon::now()->format('Y-m-d');
$m = Carbon::now()->format('y');
$min = Carbon::now()->format('d');
$flag = $min.$m;
$ref = Customerinfo::all()->where('id',$id)->first();
$officer = $ref['createdby'] ;
$refno = $this->ref();

if ( $ref['balance'] < 200 ) {

Session::flash('passmsg', "Customer Insufficent Balance!");
return Redirect::back();

}else{

$offid = Generalledger::all()->where('name',"Passbook")->first();

$bankoneact =  $offid['bankone'];
$officerbalance =  $offid['balance'] + 200;


$name =  $ref['firstname']." ".$ref['othername']." ".$ref['surname'];
$balance = $ref['balance'] - 200;


Transaction::create([
'refrenceno' => $refno,
'name' => $name,
'accountno' => $ref['accountno'],
'dr' => 200,
'cr' => 0,
'balance' =>$balance ,
'postcode' =>"PBK" ,
'narration' => "Cost of Passbook",
'postedby' => Auth::user()->username,
'accountofficer' => $officer,
]);



Transaction::create([
'refrenceno' => $refno,
'name' => "Passbook",
'accountno' =>  $bankoneact,
'dr' => 0, 
'cr' => 200,
'balance' => $officerbalance,
'postcode' =>"PBK" ,
'narration' => "Cost of Passbook",
'postedby' => Auth::user()->username,
'accountofficer' => $offid['officer'],
]);



Officerbyreport::create([
'officer' => "Passbook",
'customer' => $name,
'accountno' => $ref['accountno'], 
'deposit' => 200,
'withdrawal' =>0,
'balance' => $officerbalance ,
'posters' => Auth::user()->username ,
]);




$customer = Customerinfo::find($id);
$customer->balance = $balance;
$customer->save();


$officerid =  $offid['id'];
$general = Generalledger::find($officerid);
$general->balance = $officerbalance;
$general->save();



//These line of codes is just prepare voucher between account officer and passbook income General Ledger.


$refpass = Generalledger::all()->where("Passbook")->first();
$passbal =  $refpass['balance'];
$passbankone =  $refpass['bankone'];
$passid =  $refpass['id'];



$date = Carbon::now()->format('Y-m-d');
$resultz = Cabal::all()->where('accountno', "40020001")->where('created_at', '>',$date)->first();
//this is for the account officer leg
if($resultz){	
$cab = Cabal::find($resultz['id']);
$cab->credit = $resultz['credit']  + 200 ; 
$cab->save();

 }else{

Cabal::create([
'title' => "Income From Passbook",
'accountno' => "40020001",
'debit' => 0,
'credit' => 200,
'narration' => "Cost of Passbook",
'flag' => $flag  
]);
}

// this for the total commission leg
$till = $officer." "."Till";
$accountofficerbankone = Generalledger::all()->where('name',$till)->first();
$resultzz = Cabal::select('id','debit')->where('title', $till)->where('created_at', '>',$date)->first();
if($resultzz){
$cabx = Cabal::find($resultzz['id']);
$cabx->debit = $resultzz['debit']  + 200; 
$cabx->save();

}else{


Cabal::create([
'title' => $accountofficerbankone['name'] ,
'accountno' => $accountofficerbankone['bankone'] ,
'debit' => 200,
'credit' => 0,
'narration' => "Cost Of Passbook",
'flag' => $flag  
]);
}



Session::flash('passmsg', " 200 Withdrawn Successfully from ".$name." for the cost of passbook");

return Redirect::back();

}
}




















}