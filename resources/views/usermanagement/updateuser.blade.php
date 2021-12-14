@extends('layouts.maindashboardxx')
@section('title')
Update User Registration Form
@endsection
<!-- /.content-header -->
@section('title2')
Update User 
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>User Update Form</b></h3></div>
<div class="col-md-6"><br><br>
<form method="POST" action="{{ route('updateuserinfo') }}">
@csrf
@foreach( $users as $user)
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Firstname</label>

<div class="col-md-6">
<input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ $user['firstname'] }}" required autocomplete="fname" >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Othername</label>

<div class="col-md-6">
<input id="oname" type="text" class="form-control @error('oname') is-invalid @enderror" name="oname" value="{{ $user['othername'] }}" required autocomplete="oname" >

</div>
</div>




<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Surname</label>

<div class="col-md-6">
<input id="sname" type="text" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ $user['surname'] }}" required autocomplete="sname" >

</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Username</label>

<div class="col-md-6">
<input id="uname" type="text" class="form-control @error('uname') is-invalid @enderror" name="uname" value="{{ $user['username'] }}" required autocomplete="uname" >

</div>
</div>





<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

<div class="col-md-6">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user['email'] }}" required autocomplete="email">
</div>
</div>



<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">Status</label>
<div class="col-md-6">
<select class="form-control" id="status" name="status" required>
<option value="{{ $user['status'] }}" selected>{{ $user['status'] }}</option>  
<option value="Active"> Active </option>
<option value="Inactive"> Inactive </option>
</select> 
</div>
</div>

</div>



















<div class="col-md-6"><br><br>






<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Phone Number</label>

<div class="col-md-6">
<input id="phone" type="text" class="form-control" name="phone" value="{{ $user['phone'] }}" required autocomplete="phone" >

</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Gender</label>
<div class="col-md-6">
<select class="form-control" id="gender" name="gender" required>
<option value="{{ $user['gender'] }}"  selected>{{ $user['gender'] }}</option>  
<option value="Male"> Male </option>
<option value="Female"> Female </option>
</select> 
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Role</label>

<div class="col-md-6">
<select class="form-control" id="role" name="role" required>
<option value="{{ $user['role'] }}" selected>{{ $user['role'] }}</option>  
@foreach( $roles as $role)
<option value="{{ $role['name']}}"> {{ $role['name']}} </option>
@endforeach
</select> 
</div>
</div>






<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Address</label>

<div class="col-md-6">
<textarea class="form-control" name="address">
{{ $user['address'] }}
</textarea>
</div>
</div>


<input id="uid" type="text" class="form-control" name="uid" value="{{ $user['id'] }}" hidden >
@endforeach







</div>

<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()" ><i class=""></i><b>Back</b></a>
<button type="submit" class="btn btn-lg btn-success">Update</button>
</div>
</div></form>

</div>
</div>
</div>
</div>
</header>
@endsection
