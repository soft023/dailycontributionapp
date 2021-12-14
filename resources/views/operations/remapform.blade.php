@extends ('layouts.maindashboardx')
@section('title')
Customer Account Remap Form
@endsection
<!-- /.content-header -->
@section('title2')
Remap Form
@endsection
@include('layouts.flash')
@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Remap Form</b></h3></div>
<div class="col-md-2"></div>
<div class="col-md-6 text-center"><br><br>


@if (Session::has('remapmsg'))
   <div class="alert alert-success">{{ Session::get('remapmsg') }}</div>
@endif


<form method="POST" action="{{ route('remap') }}" >
@csrf



<div class="form-group row ">
<label class="col-md-4 col-form-label text-md-right"></label>

<div class="col-md-6">

<label>Old Account Officer</label>
<select class="form-control text-center" id="oldofficer" name="oldofficer" required>
<option value="" disabled selected>Select Account Officer</option>  
@foreach( $officers as $role)
<option value="{{ $role['username']}}">{{ $role['firstname']}} - {{ $role['surname']}}</option>
@endforeach
</select> 

<br>

<label>New Account Officer</label>
<select class="form-control text-center" id="newofficer" name="newofficer" required>
<option value="" disabled selected>Select New Account Officer</option>  
@foreach( $officers as $role)
<option value="{{ $role['username']}}">{{ $role['firstname']}} - {{ $role['surname']}}</option>
@endforeach
</select> 


<br><br>
<button type="submit" class="btn btn-lg btn-warning w3-margin-left">
{{ __('Remap') }}
</button><br><br><br><br><br><br><br><br><br>


</div>


</div>


</div></form>

</div>
</div>
</div>
</div>
</section>
@endsection

