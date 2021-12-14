<?php

namespace App\Http\Controllers;

use App\Quickloan;
use App\Accountofficer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;

class QuickloanController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function stateloanform()
{

$officers = Accountofficer::all();
return view('quickloan.stateloanform')->with('officers',$officers);
}



public function federalloanform()
{

$officers = Accountofficer::all();
return view('quickloan.federalloanform')->with('officers',$officers);
}


public function employerselection()
{
return view('quickloan.employerselection');
} 


public function confirmstatedata(Request $request)
{  

$ele = str_replace(',', '', Input::get('net'));
$loanamt = str_replace(',', '', Input::get('loanamount'));
$ele = (( $ele * 3 ) );

$installment = (($loanamt / 6 ) + ((3.5/100) * $loanamt)); 


if ($loanamt > $ele){
Session::flash('errmsg', "Sorry, You can't take more than Elegible Amount !!");
return Redirect::back();
}

$data = $request->all();

$officers = Accountofficer::all();
return view('quickloan.confirmstateform')->with('data',$data)->with('eligible',$ele)->with('installment',$installment)->with('officers',$officers);


}


public function confirmfederaldata(Request $request)
{  

$ele = str_replace(',', '', Input::get('net'));
$loanamt = str_replace(',', '', Input::get('loanamount'));

if (Input::get('tenure') ==  6){
$rate = 3;
$installment = (($loanamt / 6 ) + ((3.5/100) * $loanamt)); 
}else{
$rate = 4;
$installment = (($loanamt / 12 ) + ((3.5/100) * $loanamt)); 
}

$ele = ( $ele * $rate ) ;


if ($loanamt > $ele){
Session::flash('errmsg', "Sorry, You can't take more than Elegible Amount !!");
return Redirect::back();
}

$data = $request->all();
$officers = Accountofficer::all();
return view('quickloan.confirmfederalform')->with('data',$data)->with('eligible',$ele)->with('installment',$installment)->with('officers',$officers);

}



public function submitstatedata(Request $request)
{  
$bvn = $request->input('bvn');

$filepp = $request->file('letter')->getClientOriginalName();
$letter = $bvn.$filepp;
$request->file('letter')->move('loanletter',$letter);

$filepp = $request->file('passport')->getClientOriginalName();
$passport = $bvn.$filepp;
$request->file('passport')->move('loanpassport',$passport);

$filepp = $request->file('payslip')->getClientOriginalName();
$payslip = $bvn.$filepp;
$request->file('payslip')->move('loanpayslip',$payslip);

$filepp = $request->file('signature')->getClientOriginalName();
$signature = $bvn.$filepp;
$request->file('signature')->move('loansignature',$signature);

$filepp = $request->file('sidcard')->getClientOriginalName();
$staffidcard = $bvn.$filepp;
$request->file('sidcard')->move('loanstaffidcard',$staffidcard);

$filepp = $request->file('vidcard')->getClientOriginalName();
$validid= $bvn.$filepp;
$request->file('vidcard')->move('loanvalidid',$validid);




$loan = new Quickloan;
$loan->title = $request->input('title');
$loan->surname = $request->input('surname');
$loan->firstname = $request->input('fname');
$loan->othername = $request->input('oname');
$loan->bvn = $request->input('bvn');
$loan->phoneone = $request->input('phone');
$loan->phonetwo = $request->input('phonetwo');
$loan->dob = $request->input('dob');
$loan->maritalstatus = $request->input('marital');
$loan->email = $request->input('email');
$loan->noofchildren = $request->input('children');
$loan->homeaddress = $request->input('address');
$loan->lga = $request->input('lga');
$loan->stateoforigin = $request->input('origin');
$loan->nationality = $request->input('nationality');
$loan->nokname = $request->input('nokname');
$loan->nokphone = $request->input('nokphone');
$loan->nokaddress = $request->input('nokaddress');
$loan->nokrelationship = $request->input('nokrelationship');
$loan->idtype = $request->input('idcardtype');
$loan->idcardno = $request->input('idcardno');
$loan->idissuedate = $request->input('idcarddate');
$loan->idexpirydate = $request->input('expirydate');



$loan->loantype = $request->input('loantype');
$loan->tenure = $request->input('tenure');
$loan->net = $request->input('net');
$loan->loanamount = $request->input('loanamount');
$loan->amountinword = $request->input('amountinword');
$loan->loanpurpose = $request->input('purpose');
$loan->bankname = $request->input('bank');
$loan->salaryacount = $request->input('salaryacount');

$loan->doe = $request->input('doe');  
$loan->gradelevel = $request->input('grade');
$loan->mda = $request->input('mda');
$loan->staffidno = $request->input('staffid');
$loan->biometricno = $request->input('bionumber');
$loan->officeaddress = $request->input('officeaddress');
$loan->officeemail = $request->input('officeemail');
$loan->accountofficer = $request->input('accountofficer');

$loan->loanpassport = $passport;
$loan->loansignature = $signature;
$loan->loanstaffidcard = $staffidcard;
$loan->loanvalidid = $validid;
$loan->loanletter = $letter;
$loan->loanpayslip = $payslip;

// $loan->credit = $request->input('');
// $loan->creditcomment = $request->input('');
// $loan->control = $request->input('');
// $loan->controlcomment = $request->input('');
// $loan->fincon = $request->input('');
// $loan->finconcomment = $request->input('');
// $loan->md = $request->input('');
// $loan->mdcomment = $request->input('');
// $loan->operations = $request->input('');
// $loan->operationsstatus = $request->input('');

$loan->category = "State";
$loan->stage = 0 ;
$loan->save();    
Session::flash('sucmsg', "Your loan application has been submited successfully, don't apply twice!!");
 return $this->stateloanform();
}


public function submitfederaldata(Request $request)
{  
$bvn = $request->input('bvn');

$filepp = $request->file('letter')->getClientOriginalName();
$letter = $bvn.$filepp;
$request->file('letter')->move('loanletter',$letter);

$filepp = $request->file('passport')->getClientOriginalName();
$passport = $bvn.$filepp;
$request->file('passport')->move('loanpassport',$passport);

$filepp = $request->file('payslip')->getClientOriginalName();
$payslip = $bvn.$filepp;
$request->file('payslip')->move('loanpayslip',$payslip);

$filepp = $request->file('signature')->getClientOriginalName();
$signature = $bvn.$filepp;
$request->file('signature')->move('loansignature',$signature);

$filepp = $request->file('sidcard')->getClientOriginalName();
$staffidcard = $bvn.$filepp;
$request->file('sidcard')->move('loanstaffidcard',$staffidcard);

$filepp = $request->file('vidcard')->getClientOriginalName();
$validid= $bvn.$filepp;
$request->file('vidcard')->move('loanvalidid',$validid);




$loan = new Quickloan;
$loan->title = $request->input('title');
$loan->surname = $request->input('surname');
$loan->firstname = $request->input('fname');
$loan->othername = $request->input('oname');
$loan->bvn = $request->input('bvn');
$loan->phoneone = $request->input('phone');
$loan->phonetwo = $request->input('phonetwo');
$loan->dob = $request->input('dob');
$loan->maritalstatus = $request->input('marital');
$loan->email = $request->input('email');
$loan->noofchildren = $request->input('children');
$loan->homeaddress = $request->input('address');
$loan->lga = $request->input('lga');
$loan->stateoforigin = $request->input('origin');
$loan->nationality = $request->input('nationality');
$loan->nokname = $request->input('nokname');
$loan->nokphone = $request->input('nokphone');
$loan->nokaddress = $request->input('nokaddress');
$loan->nokrelationship = $request->input('nokrelationship');


$loan->idtype = $request->input('idcardtype');
$loan->idcardno = $request->input('idcardno');
$loan->idissuedate = $request->input('idcarddate');
$loan->idexpirydate = $request->input('expirydate');



$loan->loantype = $request->input('loantype');
$loan->tenure = $request->input('tenure');
$loan->net = $request->input('net');
$loan->loanamount = $request->input('loanamount');
$loan->amountinword = $request->input('amountinword');
$loan->loanpurpose = $request->input('purpose');
$loan->bankname = $request->input('bank');
$loan->salaryacount = $request->input('salaryacount');

$loan->doe = $request->input('doe');  
$loan->gradelevel = $request->input('grade');
$loan->mda = $request->input('mda');
$loan->staffidno = $request->input('staffid');
$loan->biometricno = $request->input('bionumber');
$loan->officeaddress = $request->input('officeaddress');
$loan->officeemail = $request->input('officeemail');
$loan->accountofficer = $request->input('accountofficer');

$loan->loanpassport = $passport;
$loan->loansignature = $signature;
$loan->loanstaffidcard = $staffidcard;
$loan->loanvalidid = $validid;
$loan->loanletter = $letter;
$loan->loanpayslip = $payslip;

// $loan->credit = $request->input('');
// $loan->creditcomment = $request->input('');
// $loan->control = $request->input('');
// $loan->controlcomment = $request->input('');
// $loan->fincon = $request->input('');
// $loan->finconcomment = $request->input('');
// $loan->md = $request->input('');
// $loan->mdcomment = $request->input('');
// $loan->operations = $request->input('');
// $loan->operationsstatus = $request->input('');

$loan->category = "Federal";
$loan->stage = 0 ;
$loan->save();    
Session::flash('sucmsg', "Your loan application has been submited successfully, don't apply twice!!");
 return $this->federalloanform();
}


}
