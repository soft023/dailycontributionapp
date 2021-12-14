<?php

namespace App\Http\Controllers;

use App\User;
use App\Quickloan;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Session;



class LoanController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

public function __construct()
{
$this->middleware('auth');
}


public function index()
{
return view('backend.newLoan');
}


public function pendinglist()
{
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

$result = Quickloan::orderby("category","desc")->where('stage',$code)->get();
return view('quickloan.pendingapplications')->with('allpending',$result);
}



public function processloan($id)
{      
$result = Quickloan::all()->where('id',$id);
return view('quickloan.processloan')->with('details',$result);
}

public function credit()
{      
$id = Input::get('lid');
$role = Auth::user()->role;
switch ($role) {

case 'Credit':
$customer = Quickloan::find($id);
$customer->credit =  Auth::user()->username;
$customer->creditcomment =  Input::get('comment');
$customer->stage =  1;
$customer->save();
$msg = "Your comment has been forwarded to the Internal Control !!";
break;

case 'Control':
$customer = Quickloan::find($id);
$customer->control =  Auth::user()->username;
$customer->controlcomment =  Input::get('comment');
$customer->stage =  2;
$customer->save();
$msg = "Your comment has been forwarded to the Fincon !!";
break;

case 'Fincon':
$customer = Quickloan::find($id);
$customer->fincon =  Auth::user()->username;
$customer->finconcomment =  Input::get('comment');
$customer->stage =  3;
$customer->save();
$msg = "Your comment has been forwarded to the MD | CEO !!";
break;

default:
$customer = Quickloan::find($id);
$customer->md =  Auth::user()->username;
$customer->mdcomment =  Input::get('comment');
$customer->stage =  4;
$customer->save();
$msg = "Your comment has been forwarded back to the Credit and Operation !!";
break;
}
Session::flash('message', $msg);
return $this->pendinglist();
}





public function history()
{
$result = Quickloan::orderBy('created_at', 'DESC')->where('stage',4)->paginate(20);
return view('quickloan.treatedapplications')->with('allpending',$result);
}


public function review($id)
{
$result = Quickloan::all()->where('id',$id);
return view('quickloan.applicationreview')->with('details',$result);
}



}
