<?php

namespace App\Http\Controllers;

use App\Issue;
use Illuminate\Http\Request;
use App\Customerinfo;
use App\Transaction;
use App\Generalledger;
use \Carbon\Carbon;
use Auth;
use Redirect;
use Session;


class IssueController extends Controller
{


public function __construct()
{
$this->middleware('auth');
}

    
public function issues()
{
$result = Issue::all()->where('status',"Not Resolved");
return view('control.issues')->with('issues',$result);
}



public function resolved($id)
{ 
$iss = Issue::find($id);
$iss->status = "Resolved";
$iss->save();
return $this->issues();
}











}
