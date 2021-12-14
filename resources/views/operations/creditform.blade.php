@extends ('layouts.maindashboardx')
@section('title')
Operation Transactions
@endsection
<!-- /.content-header -->
@section('title2')
Credit Transaction
@endsection
@include('layouts.flash')
@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Credit Form</b></h3></div>
<div class="col-md-3"></div>
<div class="col-md-6"><br><br>

@if (Session::has('messagexxx'))
   <div class="alert alert-danger">{{ Session::get('messagexxx') }}</div>
@endif
<form method="POST" action="{{ route('processcredit') }}" >
@csrf

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Input Account Code</label>

<div class="col-md-6">
<input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}">

@error('code')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>












</div>

<div class="col-md-12 text-center"><br><br>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Submit') }}
</button><br><br><br><br><br><br><br><br><br>
</div>
</div></form>

</div>
</div>
</div>
</div>
</section>
@endsection

