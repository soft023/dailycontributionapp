@extends('layouts.maindashboardx')
@section('title')
New User Registration Form
@endsection
<!-- /.content-header -->
@section('title2')
New User
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
    <div class="row justify-content-left text-dark">
        <div class="col-md-12 text-center w3-red"><h3><b>Registeration Form</b></h3></div>
        <div class="col-md-6"><br><br>

<form method="POST" action="{{ route('register') }}">
@csrf

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Firstname</label>

<div class="col-md-6">
    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" >

    @error('fname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
</div>



                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Othername</label>

                            <div class="col-md-6">
                                <input id="oname" type="text" class="form-control @error('oname') is-invalid @enderror" name="oname" value="{{ old('oname') }}" required autocomplete="oname" >

                                @error('oname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Surname</label>

                            <div class="col-md-6">
                                <input id="sname" type="text" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ old('sname') }}" required autocomplete="sname" >

                                @error('sname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                         <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="uname" type="text" class="form-control @error('uname') is-invalid @enderror" name="uname" value="{{ old('uname') }}" required autocomplete="uname" >

                                @error('uname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div></div>




























            <div class="col-md-6"><br><br>
           
          

                   


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phonenumber" required autocomplete="phone" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Gender</label>
                            <div class="col-md-6">
                               <select class="form-control" id="gender" name="gender" required>
                                <option value="" disabled selected>Select User Gender</option>  
                                <option value="Male"> Male </option>
                                <option value="Female"> Female </option>
                                </select> 
                            </div>
                        </div>
               
                        <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">Role</label>
                            <div class="col-md-6">
                               <select class="form-control" id="role" name="role" required>

                                <option value="" disabled selected>Select User Role</option>  
                                @foreach( $roles as $role)
                                <option value="{{ $role['name']}}"> {{ $role['name']}} </option>
                                @endforeach
                                </select> 
                            </div>
                        </div>






                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>





               

                  
                        </div>

                            <div class="col-md-12 text-center"><br><br>
                            <button type="submit" class="btn btn-lg btn-success">
                            {{ __('Register') }}
                            </button>
                          </div>
                    </div></form>
             
        </div>
        </div>
    </div>
</div>
</header>
@endsection
