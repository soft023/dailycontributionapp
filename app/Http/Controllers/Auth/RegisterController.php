<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

        protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */




public function registercompany()
    {
       //$this->companyvalidator($request->all())->validate();
            $filen = Input::file('logo')->getClientOriginalName();
            $code = "0001"; 
            $filename = $code.$filen;
            Input::file('logo')->move(public_path('companylogo'),$filename);


            Company::create([
            'code' => $code,
            'name' => Input::get('cname'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone'),
            'address' => Input::get('address'),
            'status' => "InActive",
            'logo' =>  $filename,
            'superusername' => Input::get('superusername'),
            'superemail' => Input::get('superemail'),
            'registeredby' => "System",
            'password' => Hash::make("123456"),
        ]);

          User::create([
            'firstname' => 'Sheriffdeen',
            'othername' => 'Kolawole',
            'surname' => 'Fasasi',
            'email' => Input::get('superemail'),
            'username' => Input::get('superusername'),
            'code' => $code,
            'status' => "Inactive",
            'password' => Hash::make("123456"),
        ]);



        return "Successful";

    }




    }