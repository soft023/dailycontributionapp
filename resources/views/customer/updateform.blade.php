@extends('layouts.maindashboardxx')
@section('title')
Customer Update Form
@endsection
<!-- /.content-header -->
@section('title2')
Update Customer Record
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Update Form</b></h3></div>


<div class="col-md-6"><br><br>
<form method="POST" action="{{ route('updatecustomer')}}" enctype="multipart/form-data">
@csrf
@foreach( $customer as $user)
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Firstname</label>
<div class="col-md-6">
<input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ $user['firstname'] }}"  required>
@error('fname')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Othername</label>
<div class="col-md-6">
<input id="oname" type="text" class="form-control @error('oname') is-invalid @enderror" name="oname" value="{{ $user['othername'] }}" required >
@error('oname')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Surname</label>
<div class="col-md-6">
<input id="sname" type="text" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ $user['surname'] }}" required >
@error('sname')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Phone Number</label>
<div class="col-md-6">
<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user['phone'] }}" required >
@error('phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">DOB</label>
<div class="col-md-6">
<input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $user['dob'] }}" required >
@error('dob')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Marital Status</label>
<div class="col-md-6">
<select class="form-control" id="marital" name="marital" required>
<option value="{{ $user['maritalstatus'] }}"  selected>{{ $user['maritalstatus'] }}</option>  
<option value="Married">Married</option>
<option value="Single">Single</option>
<option value="Widow">Widow</option>
</select> 
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Religion</label>
<div class="col-md-6">
<select class="form-control" id="religion" name="religion" required>
<option value="{{ $user['religion'] }}" selected>{{ $user['religion'] }}</option>  
<option value="Christianity">Christianity</option>
<option value="Islam">Islam</option>
<option value="Others">Others</option>
</select> 
</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Occupation</label>
<div class="col-md-6">
<input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ $user['occupation'] }}" required>
@error('occupation')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">BVN</label>
<div class="col-md-6">
<input id="bvn" type="text" class="form-control @error('bvn') is-invalid @enderror" name="bvn" value="{{ $user['bvn'] }}" onkeyup="this.value=addcommas(this.value);"   onkeyup="this.value=addcommas(this.value);" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required >
@error('bvn')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Contribution</label>
<div class="col-md-6">
<input id="contribution" type="text" class="form-control @error('contribution') is-invalid @enderror" name="contribution" value="{{ $user['contribution'] }}" onkeyup="this.value=addcommas(this.value);"   onkeyup="this.value=addcommas(this.value);" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
@error('contribution')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">SMS</label>
<div class="col-md-6">
<select class="form-control" id="sms" name="sms" required>
<option value="{{ $user['sms'] }}" selected>{{ $user['sms'] }}</option>  
<option value="No">No</option>
<option value="Yes">Yes</option>
</select> 
</div>
</div>




</div>




























<div class="col-md-6"><br><br>




<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Landmark</label>
<div class="col-md-6">
<input type="text" class="form-control @error('landmark') is-invalid @enderror" name="landmark" value="{{ $user['landmark'] }}" required >
@error('landmark')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>





<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Address</label>
<div class="col-md-6">
<textarea class="form-control" name="address">{{ $user['address'] }}</textarea>
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Home Town</label>
<div class="col-md-6">
<input type="text" class="form-control @error('town') is-invalid @enderror" name="town" value="{{ $user['town'] }}" required >
@error('town')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">L.G.A</label>
<div class="col-md-6">
<input type="text" class="form-control @error('lga') is-invalid @enderror" name="lga" value="{{ $user['lga'] }}" required>
@error('lga')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">State</label>
<div class="col-md-6">
<input type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ $user['state'] }}" required >
@error('state')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>





<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Nationality</label>
<div class="col-md-6">
<input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ $user['nationality'] }}" required>
@error('nationality')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>





<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Passport</label>
<div class="col-md-6">
<input type="text" class="form-control @error('pass') is-invalid @enderror" name="pass" value="{{ $user['passport']}}" hidden>
<div class="form-group input-group">
<img src="{{asset('/passport/').'/'.$user['passport']}}"  height="40" weight="40"/><br>
<input type="file" id="passport" class="form-control" name="passport" value="{{ $user['passport']}}" />  
</div> 
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Signature</label>
<div class="col-md-6">
<input type="text" class="form-control @error('sig') is-invalid @enderror" name="sig" value="{{ $user['signature']}}" hidden>
<div class="form-group input-group">
<img src="{{asset('/signature/').'/'.$user['signature']}}"  height="40px" weight="40px" /><br>
<input type="file" id="signature" class="form-control" name="signature" value="{{ $user['signature']}}" />  
</div> 
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Id Card</label>
<div class="col-md-6">
<input type="text" class="form-control @error('idcard') is-invalid @enderror" name="idcard" value="{{ $user['idcard']}}" hidden>
<div class="form-group input-group">
<img src="{{asset('/idcard/').'/'.$user['idcard']}}"  height="40px" weight="40px" /><br>
<input type="file" id="idcard" class="form-control" name="idcard" value="{{ $user['idcard']}}" />  
</div> 
</div>
</div>
</div>















<hr><hr><hr>









<div class="col-md-6 text-center"><br><br>

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">NOK Name</label>
<div class="col-md-6">
<input id="nokname" type="text" class="form-control @error('nokname') is-invalid @enderror" name="nokname" value="{{ $user['nokname']}}" required autocomplete="nokname" >
@error('nokname')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">NOK Relationship</label>
<div class="col-md-6">
<input id="nokrelationship" type="text" class="form-control @error('nokrelationship') is-invalid @enderror" name="nokrelationship" value="{{ $user['nokrelationship']}}" required >
@error('nokrelationship')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">NOK Phone</label>
<div class="col-md-6">
<input id="nokphone" type="text" class="form-control @error('nokphone') is-invalid @enderror" name="nokphone" value="{{ $user['nokphone']}}" required>
@error('nokphone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



</div>




<div class="col-md-6 text-center"><br><br>

<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">NOK Address</label>
<div class="col-md-6">
<textarea class="form-control" name="nokaddress">{{ $user['nokaddress']}}</textarea>
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Status</label>
<div class="col-md-6">
<select class="form-control" id="status" name="status" required>
<option value="{{ $user['status'] }}" selected>{{ $user['status'] }}</option>  
<option value="Active">Active</option>
<option value="Inactive">Inactive</option>
</select> 
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Acccount Officer</label>
<div class="col-md-6">
<select class="form-control" id="officer" name="officer" required>
<option value="{{ $user['createdby'] }}" selected>{{ $user['createdby'] }}</option>  
@foreach( $officers as $staf)
<option value="{{$staf['username']}}">{{$staf['firstname']}} {{$staf['surname']}} - {{$staf['username']}}  </option>
@endforeach
</select> 
</div>
</div>


<input id="cid" type="text" class="form-control @error('cid') is-invalid @enderror" name="cid" value="{{ $user['id']}}" hidden>
@endforeach


</div>


<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()"><i class=""></i><b>Back</b></a>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Update') }}
</button>
</div>
</div></form>

</div>
</div>
</div>
</div>
</header>
@endsection
