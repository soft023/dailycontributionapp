<?php

namespace App\Http\Controllers;

use App\Generalledger;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use \Carbon\Carbon;


class GlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
      $this->middleware('auth');
       //$this->middleware('auth');$this->middleware('marketer')->except('registertill','updatetillinfo');
       //$this->middleware('superadmin');
    }


    public function shownewtillform()
    {
        $result = User::all()->where('role',"Marketer");
        return view('officertill.createtill')->with('staff',$result);
    }
    


    public function registertill(Request $request)
    {
        $staffid = Input::get('officerid');
        $result = User::all()->where('id',$staffid)->first();
        if( Input::get('tillname') == ('Vault')){
          $code = 10000000;
          $result = "System";
        }else{
        //$code = 10080000 + $staffid;
        $result = $result['username'] ;
        }
        Generalledger::create([
            'name' => Input::get('tillname'),
            'glcode' => Input::get('bankone'),
            'bankone' => Input::get('bankone'),
            'balance' => 0,
            'officer' => $result,
            'createdby' => Auth::user()->username,
            'status' => "Active",
        ]);

        return redirect()->route('alltill');   

        
    }


    public function showalltill()
    {
        $result = Generalledger::paginate(20);
        return view('officertill.alltill')->with('tills',$result);
    }

 
    public function showupdatetillform($id)
    {
        $result = Generalledger::all()->where('id',$id);
      
        return view('officertill.updatetill')->with('tillinfo',$result);
    }
    



    public function updatetillinfo(Request $request)
    {
      $id = Input::get('glid');   
      $gl = Generalledger::find($id);
      $gl->name = Input::get('glname');
      $gl->bankone = Input::get('bankone');
      $gl->status = Input::get('status');
      $gl->save();
      return $this->showalltill();
    }



    public function showbalanceform()
    {
        return view('officertill.getbalance');
    }


    public function gettillbalance()
    {
        $till = Input::get('tillcode');
        $officer = Input::get('officer');
     
        $result = "";


        if(!empty($officer && empty($till))){
         $result = Generalledger::where('officer','like','%'. $officer. '%')->get();
        }else{
         $result = Generalledger::where('glcode','like','%'. $till. '%')->get();
        }

        if($result->isEmpty()){
          Session::flash('message', "No match found!");
          return Redirect::back();
        }

         return view('officertill.showbalance')->with('till',$result);
     
  
    }













  

    
}
