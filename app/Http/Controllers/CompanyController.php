<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Session;
class CompanyController extends Controller
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
        session()->forget('message');
        session()->forget('messagex');
        return view('backend.newcompanyform');
    }


    public function allcompany()
    {
        $result = Company::all();
        return view('backend.allcompany')->with('allstaff',$result);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewcompany($id)
    {
        $company = Company::all()->where('id',$id);
        return view('backend.viewcompany')->with('company',$company);
    }


    public function updatecompany($id)
    {
        $company = Company::all()->where('id',$id);
        return view('backend.updatecompany')->with('company',$company);
    }


    public function updatecompanyinfo(Request $request)
    { 
      $id = Input::get('cid');   
      $company = Company::find($id);
      $company->name = Input::get('cname');
      $company->email = Input::get('email');
      $company->phone = Input::get('phone');
      $company->address = Input::get('address');
      $company->status = Input::get('status');
      $company->save();
      return $this->allcompany();
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
