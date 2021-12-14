@extends('layouts.maindashboardxx')
@section('title')
Customer Details
@endsection
<!-- /.content-header -->
@section('title2')
Customer Information 
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">

<div class="col-md-12 text-center w3-red"><h3><b>Customer Information</b></h3></div>
<div class="col-md-5"><br>
<div class="w3-card w3-yellow">
@foreach( $customer as $user)
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
<p class="w3-margin-left">Phone Number :  <b>{{ $user['phone'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Date Of Birth:  <b>{{ $user['dob'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Status :  <b>{{ $user['status'] }}</b></p>
</div>


<hr>


<div class="form-group row">
<p class="w3-margin-left">Landmark:  <b>{{ $user['address'] }}</b></p>
</div>


<div class="form-group row">
<p class="w3-margin-left">Address:  <b>{{ $user['address'] }}</b></p>
</div>




<div class="form-group row">
<p class="w3-margin-left">Town:  <b>{{ $user['town'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">L. G. A:  <b>{{ $user['lga'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">State:  <b>{{ $user['state'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Nationality:  <b>{{ $user['nationality'] }}</b></p>
</div>
<hr>


<div class="form-group row">
<p class="w3-margin-left">NOK Name:  <b>{{ $user['nokname'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">NOK Phone Number:  <b>{{ $user['nokphone'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">NOK Relationship:  <b>{{ $user['nokrelationship'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">NOK Address:  <b>{{ $user['address'] }}</b></p>
</div>

</div>
</div>











<div class="col-md-2 text-left"><br><br>

</div>















<div class="col-md-5"><br>
<div class="w3-card w3-yellow">

<div class="form-group row">
<p class="w3-margin-left">Contribution :  <b>N{{ number_format($user['contribution'] ,2)}} </b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">BVN :  <b>{{ $user['bvn'] }} </b></p>
</div>


<div class="form-group row">
<p class="w3-margin-left">Account Number :  <b>{{ $user['accountno'] }} </b></p>
</div>



<div class="form-group row">
<p class="w3-margin-left">Marital Status:  <b>{{ $user['maritalstatus'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Religion:  <b>{{ $user['religion'] }}</b></p>
</div>


<div class="form-group row">
<p class="w3-margin-left">Occupation:  <b>{{ $user['occupation'] }}</b></p>
</div>
<hr>





<div class="form-group row">
<p class="w3-margin-left">Created By:  <b>{{ $user['createdby'] }}</b></p>
</div>


<div class="form-group row">
<p class="w3-margin-left">Created At:  <b>{{ $user['created_at'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Status:  <b>{{ $user['status'] }}</b></p>
</div>


<hr>
<div class="form-group">
<img  class="w3-round" src="{{asset('/passport/').'/'.$user['passport']}}" alt="Passport" height="80px" weight="50px">
</div>
<hr>
<div class="form-group">
<img class="w3-round"  src="{{asset('/signature/').'/'.$user['signature']}}" alt="Signature" height="80px" weight="50px">
</div>
<hr>
<div class="form-group">
<img  class="w3-round"  src="{{asset('/idcard/').'/'.$user['idcard']}}" alt="Idcard"  height="80px" weight="50px">
</div>

<br>

</div>









@endforeach

</div>
<div class="col-md-12 text-center"><br><br><br><br>
<a class="btn btn-lg btn-warning" href="javascript:history.back()" ><b>Back</b></a><br><br><br><br><br><br><br><br>
</div>

</div>

</div>
</div>
</div>
</div>
</header>
@endsection
