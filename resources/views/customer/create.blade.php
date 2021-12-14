@extends('layouts.maindashboardx')
@section('title')
New Customer Registration Form
@endsection
<!-- /.content-header -->
@section('title2')
New Customer
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Registeration Form</b></h3></div>


<div class="col-md-6"><br><br>
<form method="POST" action="{{ route('registercustomer')}}" enctype="multipart/form-data">
@csrf

<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Firstname</label>
<div class="col-md-6">
<input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" >
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
<input id="oname" type="text" class="form-control @error('oname') is-invalid @enderror" name="oname" value="{{ old('oname') }}" required autocomplete="oname" >
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
<input id="sname" type="text" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ old('sname') }}" required autocomplete="sname" >
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
<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" >
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
<input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" >
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
<option value="" disabled selected>Select</option>  
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
<option value="" disabled selected>Select</option>  
<option value="Christianity">Christianity</option>
<option value="Islam">Islam</option>
<option value="Others">Others</option>
</select> 
</div>
</div>



<div class="form-group row">
<label  class="col-md-4 col-form-label text-md-right">Occupation</label>
<div class="col-md-6">
<input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" >
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
<input id="bvn" type="text" class="form-control @error('bvn') is-invalid @enderror" name="bvn" value="{{ old('bvn') }}" onkeyup="this.value=addcommas(this.value);"   onkeyup="this.value=addcommas(this.value);" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
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
<input id="contribution" type="text" class="form-control @error('contribution') is-invalid @enderror" name="contribution" value="{{ old('contribution') }}" onkeyup="this.value=addcommas(this.value);"   onkeyup="this.value=addcommas(this.value);" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
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
<option value="" disabled selected>Select</option>  
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
<input type="text" class="form-control @error('landmark') is-invalid @enderror" name="landmark" required autocomplete="landmark" >
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
<textarea class="form-control" name="address"></textarea>
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Home Town</label>
<div class="col-md-6">
<input type="text" class="form-control @error('town') is-invalid @enderror" name="town" required autocomplete="town" >
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
<input type="text" class="form-control @error('lga') is-invalid @enderror" name="lga" required autocomplete="lga" >
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
<input type="text" class="form-control @error('state') is-invalid @enderror" name="state" required autocomplete="state" >
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
<input type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" required autocomplete="nationality" >
@error('nationality')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>





<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Photograph</label>
<div class="col-md-6">
<div class="form-group input-group">
 <input type="file" id="passport" class="form-control" name="passport" required />   
</div> 
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Signature</label>
<div class="col-md-6">
<div class="form-group input-group">
 <input type="file" id="signature" class="form-control" name="signature" required />   
</div> 
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">ID Card</label>
<div class="col-md-6">
<div class="form-group input-group">
 <input type="file" id="idcard" class="form-control" name="idcard" />   
</div> 
</div>
</div>

</div>







<div class="col-md-12"> <hr></div>














<div class="col-md-6 text-center"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">NOK Name</label>
<div class="col-md-6">
<input id="nokname" type="text" class="form-control @error('nokname') is-invalid @enderror" name="nokname" value="{{ old('nokname') }}" required autocomplete="nokname" >
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
<input id="nokrelationship" type="text" class="form-control @error('nokrelationship') is-invalid @enderror" name="nokrelationship" value="{{ old('nokrelationship') }}" required autocomplete="nokrelationship" >
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
<input id="nokphone" type="text" class="form-control @error('nokphone') is-invalid @enderror" name="nokphone" value="{{ old('nokphone') }}" required autocomplete="nokphone" >
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
<textarea class="form-control" name="nokaddress"></textarea>
</div>
</div>




</div>


<div class="col-md-12 text-center"><br><br>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Register') }}
</button><br><br><br>
</div>
</div></form>

</div>
</div>
</div>
</div>
</header>
@endsection
