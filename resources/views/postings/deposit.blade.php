@extends ('layouts.maindashboardx')
@section('title')
Customer Account Posting
@endsection
<!-- /.content-header -->
@section('title2')
Deposit Posting
@endsection
@include('layouts.flash')
@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Deposit Form</b></h3></div>
<div class="col-md-3"></div>
<div class="col-md-6"><br><br>


<form method="POST" action="{{ route('depositprocess') }}" >
@csrf


@if (Session::has('message'))
   <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif
@if (Session::has('messagex'))
   <div class="alert alert-success">{{ Session::get('messagex') }}</div>
@endif


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Account Number</label>

<div class="col-md-6">
<input id="accountno" type="text" class="form-control @error('accountno') is-invalid @enderror" name="accountno" value="{{ old('accountno') }}" required autocomplete="accountno" >
</div>


</div>

<div class="col-md-12 text-center"><br><br>
<button type="submit" class="btn btn-lg btn-success">
{{ __('submit') }}
</button><br><br><br><br><br><br><br><br><br>
</div>
</div></form>

</div>
</div>
</div>
</div>
</section>
@endsection

