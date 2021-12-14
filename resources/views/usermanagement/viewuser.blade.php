@extends('layouts.maindashboardxx')
@section('title')
User Details
@endsection
<!-- /.content-header -->
@section('title2')
User Information 
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>User Profile Information</b></h3></div>
<div class="col-md-6"><br><br>

@foreach( $users as $user)
<div class="form-group row">
<p class="w3-margin-left">Firstname :  <b>{{ $user['firstname'] }}</b></p>
</div>



<div class="form-group row">
<p class="w3-margin-left">Othername :  <b>{{ $user['othername'] }}</b></p>
</div>




<div class="form-group row">
<p class="w3-margin-left">Surname :  <b>{{ $user['surname'] }}</b></p>
</div>



<div class="form-group row">
<p class="w3-margin-left">Username :  <b>{{ $user['username'] }}</b></p>
</div>





<div class="form-group row">
<p class="w3-margin-left">{{ __('E-Mail Address') }} :  <b>{{ $user['email'] }}</b></p>
</div></div>




























<div class="col-md-6"><br><br>






<div class="form-group row">
<p class="w3-margin-left">Phone Number :  <b>{{ $user['phone'] }}</b></p>
</div>




<div class="form-group row">
<p class="w3-margin-left">Gender :  <b>{{ $user['gender'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Role :  <b>{{ $user['role'] }}</b></p>
</div>






<div class="form-group row">
<p class="w3-margin-left">Address :  <b>{{ $user['address'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Status :  <b>{{ $user['status'] }}</b></p>
</div>
@endforeach

</div>
<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()"><b>Back</b></a><br><br><br><br><br><br>
</div>

</div>

</div>
</div>
</div>
</div>
</header>
@endsection
