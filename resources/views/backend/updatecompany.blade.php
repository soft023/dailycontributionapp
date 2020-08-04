@extends ('layouts.maindashboardxx')
@section('title')
Update Company Information
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
<div class="col-md-12 text-center w3-red"><h3><b>Company Registeration Form</b></h3></div>
<div class="col-md-6"><br><br>


<form method="POST" action="{{ route('updatecompanyinfo') }}" >
@csrf
@foreach( $company as $comp)
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Company Name</label>

<div class="col-md-6">
<input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname" value="{{ $comp['name'] }}" required  >

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
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $comp['email'] }}" required>

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Company Phone No</label>

<div class="col-md-6">
<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $comp['phone'] }}" required >

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
<textarea class="form-control" name="address">{{ $comp['address'] }}</textarea>
</div>
</div>



<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">Company Status</label>
<div class="col-md-6">
<select class="form-control" id="status" name="status" required>
<option value="{{ $comp['status'] }}" selected>{{ $comp['status'] }}</option>  
<option value="Active"> Active </option>
<option value="Inactive"> Inactive </option>

</select> 
</div>
</div>


<input type="text" id="cid"  class="form-control" name="cid" value="{{ $comp['id'] }}" hidden>






</div>

<div class="col-md-12 text-center"><br><br><br>
@endforeach
<a class="btn btn-lg btn-warning " href="/backend/allcompanies" ><i class=""></i><b>Back</b></a>
<button type="submit" class="btn btn-lg btn-danger bg-dark">
{{ __('Update') }}
</button><br><br><br>
</div>
</div></form>

</div>
</div>
</div>
</div>
</section>
@endsection

