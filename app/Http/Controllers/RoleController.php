<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Session;



class RoleController extends Controller
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
        return view('backend.newrole');
    }


   public function allrole()
    {
        $result = Role::all();
        return view('backend.allrole')->with('allroles',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updaterole($id)
    {
        $role = Role::all()->where('id',$id);
        return view('backend.updaterole')->with('role',$role);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerrole()
    {
           Role::create([
            'name' => Input::get('rtitle'),
            'status' => Input::get('rstatus'),
        ]);
           return redirect()->route('allrole');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function updateroleinfo(Request $request)
    { 
      $id = Input::get('sid');   
      $role = Role::find($id);
      $role->name = Input::get('rtitle');
      $role->status = Input::get('status');
      $role->save();
      return $this->allrole();
    }

   
}
