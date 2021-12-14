<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use App\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{


public function __construct()
{
$this->middleware('auth');
$this->middleware('operations');
}

public function enable()
{
Business::create([
'status' => "Open",
'poster' => Auth::user()->username,
]);
return Redirect::back()->with('status',"Close");
}


public function disable()
{
$balance = Business::select('id')->where('status',"Open")->first();
$id = $balance['id'];
$biz = Business::find($id);
$biz->status = "Close";
$biz->save();
return Redirect::back()->with('status',"Close");
}






}
