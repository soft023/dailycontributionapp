@extends ('layouts.maindashboardx')
@section('title')
Customer Balance
@endsection
<!-- /.content-header -->
@section('title2')
Customer Account
@endsection
@include('layouts.flash')
@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Check Balance</b></h3></div>
<div class="col-md-3"></div>
<div class="col-md-6"><br><br>


<form method="POST" action="{{ route('checkbalance') }}" >
@csrf

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Input Account Number</label>

<div class="col-md-6">
<input id="accountno" type="text" class="form-control @error('accountno') is-invalid @enderror" name="accountno" value="{{ old('accountno') }}">

@error('accountno')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Input Name</label>

<div class="col-md-6">
<input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname') }}" >

@error('cname')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>








</div>

<div class="col-md-12 text-center"><br><br>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Get Balance') }}
</button><br><br><br><br><br><br><br><br><br>
</div>
</div></form>

</div>
</div>
</div>
</div>
</section>
@endsection

