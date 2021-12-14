@extends('layouts.maindashboardxx')
@section('title')
Account Officer Till
@endsection
<!-- /.content-header -->
@section('title2')
Account Officer Till
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Update Officer Till</b></h3></div>
<div class="col-md-2"><br><br>


<form method="POST" action="{{ route('updatetillinfo') }}">
@csrf
@foreach( $tillinfo as $gl)




</div>






<div class="col-md-6"><br><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Name</label>
<div class="col-md-6">
<input id="glname" type="text" class="form-control @error('glname') is-invalid @enderror" name="glname" value="{{ $gl['name'] }}" required autocomplete="glname" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Bankone Account</label>
<div class="col-md-6">
<input id="bankone" type="text" class="form-control @error('bankone') is-invalid @enderror" name="bankone" value="{{ $gl['bankone'] }}" required autocomplete="bankone" >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">GL Status</label>

<div class="col-md-6">
<select class="form-control" id="status" name="status" required>
<option value="{{ $gl['status'] }}">{{ $gl['status'] }}</option>  
<option value="Active"> Active </option>
<option value="Inactive"> Inactive </option>
</select> 
</div>
</div>



<input id="glid" type="text" class="form-control" name="glid" value="{{ $gl['id'] }}" hidden >
<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()"  ><i class=""></i><b>Back</b></a>
<button type="submit" class="btn btn-lg btn-success">Update</button>
</div>

</div>





<div class="col-md-4"><br><br>
<div class="form-group row">
<div class="col-md-6">

</div>



<input id="glid" type="text" class="form-control" name="glid" value="{{ $gl['id'] }}" hidden >
<input id="glid" type="text" class="form-control" name="xcode" value="{{ $gl['glcode'] }}" hidden >
<input id="glid" type="text" class="form-control" name="xcat" value="{{ $gl['category'] }}" hidden >
@endforeach

</div>




</div></form>

</div>
</div>
</div>
</div>
</header>
@endsection
