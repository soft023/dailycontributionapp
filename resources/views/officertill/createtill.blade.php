@extends('layouts.maindashboardx')
@section('title')
New Till Form
@endsection
<!-- /.content-header -->
@section('title2')
Account Officer Till
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Creation Form</b></h3></div>



<div class="col-md-2">
</div>



<div class="col-md-7"><br><br>
<form method="POST" action="{{ route('registertill') }}">
@csrf
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Till Name</label>
<div class="col-md-6">
<input id="tillname" type="text" class="form-control @error('tillname') is-invalid @enderror" name="tillname" value="{{ old('tillname') }}" required autocomplete="tillname" >
@error('tillname')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">BankOne Account</label>
<div class="col-md-6">
<input id="bankone" type="text" class="form-control @error('bankone') is-invalid @enderror" name="bankone" value="{{ old('bankone') }}" required autocomplete="bankone" >
@error('bankone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

{{-- <input type="text" class="form-control" name="staffid" value="{{$staffid}}" hidden> --}}

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Account Officer</label>
<div class="col-md-6">
<select class="form-control" name="officerid" required>
<option value="" disabled selected>Select Officer</option>  
<option value="System" >System</option>  
@foreach( $staff as $staf)
<option value="{{$staf['id']}}">{{$staf['firstname']}} {{$staf['surname']}} - {{$staf['username']}}  </option>
@endforeach
</select> 

</div>
</div>
<div class="col-md-12 text-center"><br>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Submit') }}
</button>
    </div>

</form>
</div>





<div class="col-md-3"></div>

</div>
</div>
</div>
</div>
</header>
@endsection
