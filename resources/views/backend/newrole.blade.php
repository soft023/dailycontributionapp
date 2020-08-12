@extends ('layouts.maindashboardx')
@section('title')
New Role Registration
@endsection
<!-- /.content-header -->
@section('title2')
Backend
@endsection
@include('layouts.flash')
@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Role Registeration Form</b></h3></div>
<div class="col-md-4"></div>
<div class="col-md-4"><br><br>


<form method="POST" action="{{ route('registerrole') }}" enctype="multipart/form-data">
@csrf

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Role Title</label>

<div class="col-md-6">
<input id="rtitle" type="text" class="form-control @error('rtitle') is-invalid @enderror" name="rtitle" value="{{ old('rtitle') }}" required autocomplete="rtitle" >

@error('cname')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>


<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">Role Status</label>
<div class="col-md-6">
<select class="form-control" id="rstatus" name="rstatus" required>
<option disabled>Select Status</option>  
<option value="Active"> Active </option>
<option value="Inactive"> Inactive </option>

</select> 
</div>
</div>







{{-- 



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



















<div class="col-md-6"><br><br>


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
 --}}







</div>

<div class="col-md-12 text-center"><br><br>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Register') }}
</button><br><br><br><br><br><br><br><br><br>
</div>
</div></form>

</div>
</div>
</div>
</div>
</section>
@endsection

