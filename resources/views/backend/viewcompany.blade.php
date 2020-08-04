@extends ('layouts.maindashboardxx')
@section('title')
Company Details
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
<div class="col-md-12 text-center w3-red"><h3><b>Company Registeration Details</b></h3></div>
<div class="col-md-6"><br><br>

@foreach( $company as $comp)


<div class="form-group row">
<p class="w3-margin-left"> Company Name :  <b>{{ $comp['name'] }}</b></p>
<div class="col-md-6">

</div>
</div>

<div class="form-group row">
<p class="w3-margin-left"> Company Code :  <b>{{ $comp['code'] }}</b></p>
<div class="col-md-6">

</div>
</div>


<div class="form-group row">

<p class="w3-margin-left"> Company Phone Number :  <b>{{ $comp['phone'] }}</b></p>
<div class="col-md-6">
</div>
</div>


<div class="form-group row">

<p class="w3-margin-left"> Company Email :  <b>{{ $comp['email'] }}</b></p>
<div class="col-md-6">
</div>
</div>

<div class="form-group row">

<p class="w3-margin-left"> Company Status :  <b>{{ $comp['status'] }}</b></p>
<div class="col-md-6">

</div>
</div>

<div class="form-group row">

<p class="w3-margin-left"> Company Address :  <b>{{ $comp['address'] }}</b></p>
<div class="col-md-6">

</div>
</div>




<div class="form-group row">

<p class="w3-margin-left"> Supervisor Username :  <b>{{ $comp['superusername'] }}</b></p>
<div class="col-md-6">

</div>
</div>



<div class="form-group row">

<p class="w3-margin-left"> Supervisor Email :  <b>{{ $comp['superemail'] }}</b></p>
<div class="col-md-6">

</div>
</div>


</div>



















<div class="col-md-6"><br><br>

<div class="form-group row">


<img src="{{asset('/companylogo/').'/'.$comp['logo']}}" )}}"  class="text-right" height="150px" weight="150px" alt="Company Logo" > 
</div>










</div>
@endforeach
<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-warning " href="/backend/allcompanies" ><i class=""></i><b>Back</b></a><br><br><br><br><br><br>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
@endsection

