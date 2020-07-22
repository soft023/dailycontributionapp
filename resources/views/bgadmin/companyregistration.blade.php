@extends('bgadmin.layouts.main')

@section('content')
<header class="masthead text-center text-white">
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12 text-center"><h3>Company Registeration Form</h3><br></div>
        <div class="col-md-6">
                    <form method="POST" action="{{ route('registercompany') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Company Name</label>

                            <div class="col-md-6">
                                <input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname') }}" required autocomplete="cname" >

                                @error('cname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Company Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Company Logo</label>

                            <div class="col-md-6">
                                <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" required autocomplete="logo" >

                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                 <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Company Phone No</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" >

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="w3-text-white">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


             


</div>




























            <div class="col-md-6">
           
          
               
                   


                    


                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">Company Address</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>


                     <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Admin Username</label>

                            <div class="col-md-6">
                                <input id="superusername" type="text" class="form-control @error('superusername') is-invalid @enderror" name="superusername" value="{{ old('superusername') }}" required autocomplete="superusername" >

                                @error('superusername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Admin Email</label>

                            <div class="col-md-6">
                                <input id="superemail" type="email" class="form-control @error('superemail') is-invalid @enderror" name="superemail" value="{{ old('superemail') }}" required autocomplete="superemail">

                                @error('superemail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                   
               

                  
                        </div>

                            <div class="col-md-12 text-center"><br>
                            <button type="submit" class="btn btn-lg btn-primary">
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
