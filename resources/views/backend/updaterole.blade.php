@extends ('layouts.maindashboardxx')
@section('title')
Update Role Information
@endsection
<!-- /.content-header -->
@section('title2')
Backend
@endsection

@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Update Role Form</b></h3></div>
<div class="col-md-6"><br><br>


<form method="POST" action="{{ route('updateroleinfo') }}" >
@csrf
@foreach( $role as $comp)
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Company Name</label>

<div class="col-md-6">
<input id="rtitle" type="text" class="form-control @error('rtitle') is-invalid @enderror" name="rtitle" value="{{ $comp['name'] }}" required  >

@error('rtitle')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

</div>











<div class="col-md-6"><br><br>

<div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right">Role Status</label>
<div class="col-md-6">
<select class="form-control" id="status" name="status" required>
<option value="{{ $comp['status'] }}"disabled>{{ $comp['status'] }}</option>  
<option value="Active"> Active </option>
<option value="Inactive"> Inactive </option>

</select> 
</div>
</div>


<input type="text" id="sid"  class="form-control" name="sid" value="{{ $comp['id'] }}" hidden>






</div>

<div class="col-md-12 text-center"><br><br><br>
@endforeach
<a class="btn btn-lg btn-warning " href="/backend/allrole" ><i class=""></i><b>Back</b></a>
<button type="submit" class="btn btn-lg btn-danger bg-dark">
{{ __('Update') }}
</button><br><br><br>
</div>
</div></form>

</div>
</div>
</div>
</div>
</section>
@endsection

