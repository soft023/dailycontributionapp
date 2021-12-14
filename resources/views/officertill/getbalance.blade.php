@extends ('layouts.maindashboardx')
@section('title')
Till Balance
@endsection
<!-- /.content-header -->
@section('title2')
Account Officer Till
@endsection
@include('layouts.flash')
@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Search For Balance</b></h3></div>
<div class="col-md-4"></div>
<div class="col-md-4"><br><br>


<form method="POST" action="{{ route('gettillbalance') }}" >
@csrf


@if (Session::has('message'))
   <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Input Till Code</label>
<div class="col-md-6">
<input id="tillcode" type="text" class="form-control @error('tillcode') is-invalid @enderror" name="tillcode" >
@error('tillcode')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>




<div class="form-group row">
<label class="col-md-6col-form-label text-md-right"> Officer Username </label>
<div class="col-md-6">
<input id="officer" type="text" class="form-control @error('officer') is-invalid @enderror" name="officer">
@error('officer')
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

