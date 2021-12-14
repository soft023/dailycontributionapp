<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\User;
use redirect;
use App\Role;
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


    public function __construct()
    {
       $this->middleware('auth');
    }



  public function showalluser()
    {
      $code = Auth::user()->code;
      $users = User::all()->where('code',$code);
      return view('usermanagement.alluser')->with('users',$users);
    }



  public function shownewuserform()
    {
      $roles = Role::all();
      return view('usermanagement.newuser')->with('roles',$roles);
    }



 public function viewuser($id)
    {
      $users = User::all()->where('id',$id);
      return view('usermanagement.viewuser')->with('users',$users);
    }


  public function showupdateuserform($id)
    {
      $roles = Role::all();
      $users = User::all()->where('id',$id);
      return view('usermanagement.updateuser')->with('users',$users)->with('roles',$roles);
    }



  public function updateuserinfo($id)
    {
      $users = User::all()->where('id',$id);
      return view('usermanagement.update')->with('users',$users);
    }


protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


protected function update(Request $request)
    {
      $id = Input::get('uid');  

      $user = User::find($id);
      $user->firstname = Input::get('fname');
      $user->othername = Input::get('oname');
      $user->surname = Input::get('sname');
      $user->address = Input::get('address');
      $user->gender = Input::get('gender');
      $user->email = Input::get('email');
      $user->username = Input::get('uname');
      $user->phone = Input::get('phone');
      $user->role = Input::get('role');
      $user->status = Input::get('status');
      $user->save();
      return $this->showalluser();
             
    }





protected function register()
    {
          
             User::create([
            'firstname' => Input::get('fname'),
            'othername' => Input::get('oname'),
            'surname' => Input::get('sname'),
            'address' => Input::get('address'),
            'gender' => Input::get('gender'),
            'email' => Input::get('email'),
            'username' => Input::get('uname'),
            'phone' => Input::get('phonenumber'),
            'role' => Input::get('role'),
            'status' => "Active",
            'password' => Hash::make("123456"),
        ]);

        return redirect()->route('allusers');
    }


// public function registercompany()
//     {
//            // $this->companyvalidator($request->all())->validate();
//             $filen = Input::file('logo')->getClientOriginalName();
//              $comp =  Company::latest()->first();
//            $code = "000".($comp['id'] + 1);





//             $filename = $code.$filen;
//             Input::file('logo')->move(public_path('companylogo'),$filename);


//             Company::create([
//             'code' => $code,
//             'name' => Input::get('cname'),
//             'email' => Input::get('email'),
//             'phone' => Input::get('phone'),
//             'address' => Input::get('address'),
//             'status' => "InActive",
//             'logo' =>  $filename,
//             'superusername' => Input::get('superusername'),
//             'superemail' => Input::get('superemail'),
//             'registeredby' => "System",
//             'password' => Hash::make("123456"),
//         ]);

//           User::create([
//             'firstname' => '',
//             'othername' => '',
//             'surname' => '',
//             'email' => Input::get('superemail'),
//             'username' => Input::get('superusername'),
//             'code' => $code,
//             'role' => "Admin",
//             'status' => "Inactive",
//             'password' => Hash::make("123456"),
//         ]);



//             $now = date('Y-m-d');
//             $due = date('Y-m-d', strtotime($now . " +7 days"));
            
//             Payment::create([
//             'code' => $code,
//             'name' => Input::get('cname'),
//             'due' => $due,
//             'updatedby' => "System",
//             'status' => "Running",
//         ]);


//         return redirect()->route('allcompany');






//     }







}