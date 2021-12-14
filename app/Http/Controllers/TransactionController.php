<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Customerinfo;
use App\Generalledger;
use App\Officerbyreport;
use App\Business;
use App\Issue;
use App\Cabal;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \Carbon\Carbon;
use Auth;
use Redirect;
use Session;
use \GuzzleHttp\Client;


class TransactionController extends Controller
{



public function __construct()
{
$this->middleware('auth');
$this->middleware('marketer');
}




public function ref()
{
$result = Transaction::all()->last();

if($result){
  $ref = $result['refrenceno'] + 1 ;
 }else{
 $ref = 1;
  }
return $ref;
}













//Deposit Process
public function depositform()
{
return view('postings.deposit');
}
public function depositprocess()
{

session()->forget('messagex');
$biz = Business::all()->where('status',"Open")->first();

if(!$biz){
Session::flash('message', "Sorry, business is not yet opened. Contact Operations !!");
return Redirect::back();
}else{
$result = Customerinfo::where('accountno',Input::get('accountno'))->where('createdby',Auth::user()->username)->get();
if($result->isEmpty()){
Session::flash('message', "No record found, check the account number and ensure you are the account officer then try again !");
return Redirect::back();
}else{
return view('postings.depositpost')->with('customer',$result);
}
}
}


public function postdeposit(){

$id = Input::get('cid');
$ref = Customerinfo::all()->where('id',$id)->first();
$refno = $this->ref();


$name =  $ref['firstname']." ".$ref['othername']." ".$ref['surname'];
$balance = $ref['balance'] + Input::get('amount');
$contri = $ref['contribution'];
$officer = $ref['createdby'];


if (Input::get('amount') < $contri ){

Issue::create([
'name' => $name,
'accountno' => $ref['accountno'],
'phoneno' => $ref['phone'],
'contribution' => $contri ,
'difference' => Input::get('amount')  ,
'poster' => Auth::user()->username,
'status' => "Not Resolved",
]);

}


$offid = Generalledger::all()->where('officer',Auth::user()->username)->first();
$officerid =  $offid['id'];
$bankoneact =  $offid['bankone'];
$namxx =  $offid['name'];
$officerbalance =  $offid['balance'] + Input::get('amount');



Transaction::create([
'refrenceno' => $refno,
'name' => $name,
'accountno' => $ref['accountno'],
'dr' => 0,
'cr' => Input::get('amount'),
'balance' => $balance  ,
'postcode' =>"CTD" ,
'narration' => Input::get('nar'),
'postedby' => Auth::user()->username,
'accountofficer' => $officer,
]);


Transaction::create([
'refrenceno' => $refno,
'name' => $offid['name'],
'accountno' =>  $bankoneact,
'dr' =>Input::get('amount'),
'cr' => 0,
'balance' =>$officerbalance  ,
'postcode' =>"CTD" ,
'narration' => Input::get('nar'),
'postedby' => Auth::user()->username,
'accountofficer' => $offid['officer'],
]);


Officerbyreport::create([
'officer' => $officer,
'customer' => $name,
'accountno' => $ref['accountno'], 
'deposit' => Input::get('amount'),
'withdrawal' => 0,
'balance' => $officerbalance  ,
'posters' => Auth::user()->username ,
]);


$customer = Customerinfo::find($id);
$customer->balance = $balance;
$customer->save();



$general = Generalledger::find($officerid);
$general->balance = $officerbalance;
$general->save();


$amt = Input::get('amount');



// Code for Commission Starts from here 
$mnt = Carbon::now()->format('m');
$month = Transaction::all()
->where('created_at', '>=', Carbon::now()->startOfMonth())
->where('postcode',"COM")
->where('accountno', $ref['accountno'])->first();

if(!$month){

$custbal = Customerinfo::select('balance')->where('id',$id)->first();
$custbal = $custbal['balance'];

$com = $contri / 2 ;
$custnewbal = $custbal - $com;

$customerz = Customerinfo::find($id);
$customerz->balance =  $custnewbal;
$customerz->save();

$offidz = Generalledger::all()->where('name','Officer Com')->where('officer',$officer)->first();
$comid =  $offidz['id'];
$combal =  $offidz['balance'] + $com ; 

$generalz = Generalledger::find($comid);
$generalz->balance = $combal;
$generalz->save();


$refxxx =  $this->ref();

Transaction::create([
'refrenceno' => $refxxx,
'name' => $name,
'accountno' => $ref['accountno'],
'dr' => $com,
'cr' => 0,
'balance' => $custnewbal,
'postcode' =>"COM" ,
'narration' => "Commission for new month-".$mnt,
'postedby' => Auth::user()->username,
'accountofficer' => $officer,
]);


Transaction::create([
'refrenceno' => $refxxx,
'name' => "Officer Com",
'accountno' => $offidz['bankone'],
'dr' => 0,
'cr' => $com,
'balance' => $combal,
'postcode' =>"COM" ,
'narration' => "Commission from-".$name,
'postedby' => Auth::user()->username,
'accountofficer' => $officer,
]);


Officerbyreport::create([
'officer' =>"Officer Com",
'customer' => $name,
'accountno' => $ref['accountno'],
'deposit' => $com,
'withdrawal' => 0,
'balance' => $combal  ,
'posters' => Auth::user()->username ,
]);

 }



//Code for the other part where where customer has contributed more than expected the second commision comes in
// $check = $contri * 30;
// if($balance > $check){
// $mnt = Carbon::now()->format('m');
// $commz = Transaction::all()
// ->where('created_at', '>=', Carbon::now()->startOfMonth())
// ->where('postcode',"COM")
// ->where('accountno', $ref['accountno'])->count();


// if($commz == 1){


// $custbal = Customerinfo::select('balance')->where('id',$id)->first();
// $custbal = $custbal['balance'];

// $com = $contri / 2 ;
// $custnewbal = $custbal - $com;

// $customerz = Customerinfo::find($id);
// $customerz->balance =  $custnewbal;
// $customerz->save();

// $offidz = Generalledger::all()->where('name','Officer Com')->where('officer',$officer)->first();
// $comid =  $offidz['id'];
// $combal =  $offidz['balance'] + $com ; 

// $generalz = Generalledger::find($comid);
// $generalz->balance = $combal;
// $generalz->save();


// $refxxx =  $this->ref();

// Transaction::create([
// 'refrenceno' => $refxxx,
// 'name' => $name,
// 'accountno' => $ref['accountno'],
// 'dr' => $com,
// 'cr' => 0,
// 'balance' => $custnewbal,
// 'postcode' =>"COM" ,
// 'narration' => "Commission due to over contribution -".$mnt,
// 'postedby' => Auth::user()->username,
// 'accountofficer' => $officer,
// ]);


// Transaction::create([
// 'refrenceno' => $refxxx,
// 'name' => "Officer Com",
// 'accountno' => $offidz['bankone'],
// 'dr' => 0,
// 'cr' => $com,
// 'balance' => $combal,
// 'postcode' =>"COM" ,
// 'narration' => "Commission due to over contribution from-".$name,
// 'postedby' => Auth::user()->username,
// 'accountofficer' => $officer,
// ]);


// Officerbyreport::create([
// 'officer' =>"Officer Com",
// 'customer' => $name,
// 'accountno' => $ref['accountno'], 
// 'deposit' => $com,
// 'withdrawal' => 0,
// 'balance' => $combal  ,
// 'posters' => Auth::user()->username ,
// ]);

// }



// }









//Codes for commission ends here...



Session::flash('messagex', Input::get('amount')." Posted Successfully to ". $ref['accountno']." , New Balance is N" .number_format($balance ,2));
return view('postings.deposit');


}









///Withdrawal Process
public function withdrawalform()
{
return view('postings.withdrawal');
}

public function withdrawalprocess()
{
session()->forget('wtherr');
session()->forget('wthsuc');

$biz = Business::all()->where('status',"Open")->first();

if(!$biz){
Session::flash('wtherr', "Sorry, business is not yet opened. Contact Operations !!");
return Redirect::back();
}else{

$result = Customerinfo::where('accountno',Input::get('accountno'))->get();
if($result->isEmpty()){
Session::flash('wtherr', "No record found, check the account number and try again !");
return Redirect::back();
}else{

if ($result[0]['withdrawable'] == "No"){

Session::flash('wtherr', "Withdrawal not allowed on this account, please meet the operations !");
return $this->withdrawalform();

}else{
return view('postings.withdrawalpost')->with('customer',$result);
}
}
}
}






public function postwithdrawal(){

$id = Input::get('cid');
$ref = Customerinfo::all()->where('id',$id)->first();
$refno = $this->ref();

if (Input::get('amount') > $ref['balance'] ) {

Session::flash('wtherr', "Customer Insufficent Balance!");
return $this->withdrawalform();

}else{

$offid = Generalledger::all()->where('officer',Auth::user()->username)->where('name','!=',"Officer Com")->first();
$bankoneact =  $offid['bankone'];
$officerbalance =  $offid['balance'] - Input::get('amount');


if (Input::get('amount') > $offid['balance']) {

Session::flash('wtherr', "Account Officer Insufficent Balance!");
return $this->withdrawalform();
}else{



$name =  $ref['firstname']." ".$ref['othername']." ".$ref['surname'];
$balance = $ref['balance'] - Input::get('amount');
$officer = $ref['createdby'] ;

Transaction::create([
'refrenceno' => $refno,
'name' => $name,
'accountno' => $ref['accountno'],
'dr' => Input::get('amount'),
'cr' => 0,
'balance' =>$balance ,
'postcode' =>"CTW" ,
'narration' => Input::get('narration'),
'postedby' => Auth::user()->username,
'accountofficer' => $officer,
]);



Transaction::create([
'refrenceno' => $refno,
'name' => $offid['name'],
'accountno' =>  $bankoneact,
'dr' => 0, 
'cr' => Input::get('amount'),
'balance' =>$officerbalance  ,
'postcode' =>"CTW" ,
'narration' => Input::get('narration'),
'postedby' => Auth::user()->username,
'accountofficer' => $offid['officer'],
]);



Officerbyreport::create([
'officer' => $officer,
'customer' => $name,
'accountno' => $ref['accountno'], 
'deposit' => 0,
'withdrawal' =>Input::get('amount'),
'balance' => $balance  ,
'posters' => Auth::user()->username ,
]);




$customer = Customerinfo::find($id);
$customer->balance = $balance;
$customer->save();


$officerid =  $offid['id'];
$officerbalance =  $offid['balance'] - Input::get('amount');
$general = Generalledger::find($officerid);
$general->balance = $officerbalance;
$general->save();






Session::flash('wthsuc', Input::get('amount')." Withdrawn Successfully from ". $ref['accountno']." , New Balance is N" .number_format($balance ,2));
return $this->withdrawalform();



}


}










}



















































//My till
public function mytill()
{

$date = Carbon::now()->format('Y-m-d');
$offid = Generalledger::select('balance')->where('officer',Auth::user()->username)->first();
$balance =  $offid['balance'];
$deposit = 0;
$withdrawal = 0;

$reff = Transaction::select('cr')->where('postedby',Auth::user()->username)->where('postcode',"CTD")->where('created_at', '>',$date)->get();
$ref = count($reff);

for ($i = 0 ; $i < $ref; $i++) { 
$deposit += $reff[$i]['cr'];
}

$reff = Transaction::select('dr')->where('postedby',Auth::user()->username)->where('postcode',"CTW")->where('created_at', '>',$date)->get();
$ref = count($reff);

for ($i = 0 ; $i < $ref; $i++) { 
$withdrawal += $reff[$i]['dr'];
}

return view('postings.mytill')->with('balance',$balance)->with('deposit',$deposit)->with('withdrawal',$withdrawal);
}



//passbook




public function passbook($id)
{
return "In Progress !!!";
}



// FFor Officer Report 

public function officerreportframe()
{
return view('postings.officerreportframe');
}


public function officerreport(Request $request)
{

$request->validate([

    'from'        => 'required|date',
    'to'          => 'required|date',
]);

$from    = Carbon::parse($request->from)->startOfDay()->toDateTimeString(); 
$to      = Carbon::parse($request->to)->endOfDay()->toDateTimeString();

$result  = Transaction::orderBy('id','desc')->orderBy('created_at', 'DESC')->where('postedby',Auth::user()->username)->whereBetween('created_at', [$from, $to])->paginate(100) ;
return view('postings.officerreport')->with('report',$result);
}






}