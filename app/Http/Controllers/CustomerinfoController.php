<?php

namespace App\Http\Controllers;

use App\Customerinfo;
use App\Transaction;
use App\Cabal;
use App\user;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Session;
use \Carbon\Carbon;

class CustomerinfoController extends Controller
{
public function __construct()
{
$this->middleware('auth');
$this->middleware('marketer')->except('checkbalanceform','checkbalance','balance','customerreportform','makewithdrawable','report','getreport','showallcustomer','showinfo','disablethdrawable','showupdateform','update');

}




public function customerreportform()
{
// $result = Accountchart::all();
return view('customer.reportform');
}


public function newcustomerform()
{
// $result = Accountchart::all();
return view('customer.create');
}



public function showallcustomer()
{
$result = Customerinfo::orderBy('id','desc')->get();
return view('customer.all')->with('customers',$result);
}

public function report($accountno)
{
$result = Transaction::orderBy('id','desc')->where('accountno',$accountno)->paginate(50);
$name = $result[0]['name'];
$accountno = $result[0]['accountno'];
$dr = Transaction::where('accountno',$accountno)->sum('dr');
$cr = Transaction::where('accountno',$accountno)->sum('cr');
$balance =Customerinfo::select('balance')->where('accountno',$accountno)->first();
$balance =$balance['balance'];
return view('customer.accountreport')->with('report',$result)->with('name',$name)->with('accountno',$accountno)->with('dr',$dr)->with('cr',$cr)->with('balance',$balance);
}


public function makewithdrawable($id)
{
$customer = Customerinfo::find($id);
$customer->withdrawable = "Yes";
$customer->save();
return Redirect::back();
}

public function disablethdrawable($id)
{
$customer = Customerinfo::find($id);
$customer->withdrawable = "No";
$customer->save();
return Redirect::back();
}


public function getreport()
{

if (Auth::user()->role == "Marketer"){
$result = Customerinfo::all()->where('accountno',Input::get('accountno'))->where('createdby',Auth::user()->username)->first();

if(is_null($result)){
Session::flash('messagexx', "No record found, check the account number, confirm you are the account officer and try again !");
return Redirect::back();
}
}
$result = Customerinfo::all()->where('accountno',Input::get('accountno'));
return view('customer.reportlist')->with('customers',$result);

}



public function showmycustomers()
{
$result = Customerinfo::all()->where('createdby',Auth::user()->username);
return view('customer.all')->with('customers',$result);
}


public function allcustomers()
{
$result = Customerinfo::all();
return view('customer.all')->with('customers',$result);
}



public function showupdateform($id)
{
$result = Customerinfo::all()->where('id',$id);
$officers = User::all()->where('role',"Marketer");
return view('customer.updateform')->with('customer',$result)->with('officers',$officers);
}








public function showinfo($id)
{
$result = Customerinfo::all()->where('id',$id);
return view('customer.viewcustomer')->with('customer',$result);
}


public function checkbalanceform()
{
return view('customer.getbalance');
}  



public function checkbalance()
{

$no = Input::get('accountno');
$nam = Input::get('cname');

if (auth::user()->role == "Marketer"){

$result = Customerinfo::where('createdby',Auth::user()->username)->where( function ( $query ){
 $query->where( 'accountno', Input::get('accountno'))
->orWhere( 'surname',Input::get('cname') )
->orWhere( 'othername',Input::get('cname') )
->orWhere( 'firstname',Input::get('cname') );})
->get();

$re = $result->count();
if(!$re >= 1){	
Session::flash('message', "No match found!");
}else{
session()->forget('message');
}

}else{
 $result = Customerinfo::where( function ( $query ){
 $query->where( 'accountno', Input::get('accountno'))
->orWhere( 'surname',Input::get('cname') )
->orWhere( 'othername',Input::get('cname') )
->orWhere( 'firstname',Input::get('cname') );})
->get();

$re = $result->count();
if(!$re >= 1){	
Session::flash('message', "No match found!");
}else{
session()->forget('message');
}



}

return view('customer.listofcustomer')->with('customers',$result);

}  



public function balance($id)
{
$result = Customerinfo::all()->where('id',$id);
return view('customer.showbalance')->with('customer',$result);
}






public function update(Request $request)
{

$id = Input::get('cid');
$result = Customerinfo::all()->where('id',$id)->first();


$accountno = $result['accountno'];


if($_FILES['signature']['name'] == "") {
$signature = Input::get('sig');
}else{
$filess = Input::file('signature')->getClientOriginalName();
$signature = $accountno.$filess;
Input::file('signature')->move('signature',$signature);
}


if($_FILES['passport']['name'] == "") {
$passport = Input::get('pass');
}else{
$filepp = Input::file('passport')->getClientOriginalName();
$passport = $accountno.$filepp;
Input::file('passport')->move('passport',$passport);
}


if($_FILES['idcard']['name'] == "") {
$idcard = Input::get('idcard');
}else{
$filepp = Input::file('idcard')->getClientOriginalName();
$idcard = $accountno.$filepp;
Input::file('idcard')->move('idcard',$idcard);
}


$customer = Customerinfo::find($id);
$customer->firstname = Input::get('fname');
$customer->surname = Input::get('sname');
$customer->othername = Input::get('oname');
$customer->address = Input::get('address');
$customer->town = Input::get('town');
$customer->lga = Input::get('lga');
$customer->state = Input::get('state');
$customer->phone = Input::get('phone');
$customer->dob = Input::get('dob');
$customer->maritalstatus = Input::get('marital');
$customer->nationality = Input::get('nationality');
$customer->nokname = Input::get('nokname');
$customer->nokrelationship = Input::get('nokrelationship');
$customer->landmark = Input::get('landmark');
$customer->nokaddress = Input::get('nokaddress');
$customer->nokphone = Input::get('nokphone');
$customer->bvn = Input::get('bvn');
$customer->religion = Input::get('religion');
$customer->occupation = Input::get('occupation');
$customer->contribution = Input::get('contribution');
$customer->passport = $passport;
$customer->signature = $signature;
$customer->idcard = $idcard;
$customer->status =  Input::get('status');
$customer->sms =  Input::get('sms');
$customer->save();


return redirect()->route('allcustomer');




}






public function create(Request $request)
{

$comp =  Customerinfo::select('accountno')->latest()->first();
 if (!empty($comp['accountno'])) {

$accountno = $comp['accountno'];
$accountno =  $accountno + 1 ;

}else{

$accountno = 5405331000;

}
if ($_FILES['idcard']['name'] == "") {
$idcard = "";
}else{
$fileii = Input::file('idcard')->getClientOriginalName();
$idcard = $accountno.$fileii;
Input::file('idcard')->move(public_path('idcard'),$idcard);
}

$filepp = Input::file('passport')->getClientOriginalName();
$filess = Input::file('signature')->getClientOriginalName();


$passport = $accountno.$filepp;
$signature = $accountno.$filess;


Input::file('passport')->move('passport',$passport);
Input::file('signature')->move('signature',$signature);


Customerinfo::create([
'firstname' => Input::get('fname'),
'surname' => Input::get('sname'),
'othername' => Input::get('oname'),
'landmark' => Input::get('landmark'),
'address' => Input::get('address'),
'town' => Input::get('town'),
'lga' => Input::get('lga'),
'state' => Input::get('state'),
'phone' => Input::get('phone'),
'dob' => Input::get('dob'),
'maritalstatus' => Input::get('marital'),
'nationality' => Input::get('nationality'),
'nokname' => Input::get('nokname'),
'nokrelationship' => Input::get('nokrelationship'),
'nokaddress' => Input::get('nokaddress'),
'nokphone' => Input::get('nokphone'),
'occupation' => Input::get('occupation'),
'contribution' => Input::get('contribution'),
'bvn' => Input::get('bvn'),
'religion' => Input::get('religion'),
'passport' => $passport,
'signature' => $signature,
'idcard' => $idcard,
'accountno' => $accountno,
'contribution' => Input::get('contribution'),
'withdrawable' => "No",
'balance' => 0,
'createdby' => Auth::user()->username,
'status' => "Active",
'sms' => Input::get('sms'),

]);


// $date = Carbon::now()->format('Y-m-d');
// $result = Cabal::latest('id','customers')->where('officer', Auth::user()->username)->where('created_at', '>',$date)->first();



// if($result){	
// $cust = $result['customers']  + 1 ; 
// $cab = Cabal::find($result['id']);
// $cab->customers = $cust ;
// $cab->save();

//  }else{

// Cabal::create([
// 'officer' => Auth::user()->username,
// 'dr' => 0,
// 'cr' => 0,
// 'customers' =>1 ,
// ]);

//   }


return redirect()->route('showmycustomers');

}


}
