@extends('layouts.maindashboardxx')
@section('title')
Debit Posting
@endsection
<!-- /.content-header -->
@section('title2')
Operations Transaction
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Account Information</b></h3></div>
<div class="col-md-5"><br><br>

@foreach( $account as $user)
<div class="form-group row">
<p class="w3-margin-left">Name :  <b>{{ $user['name'] }}</b></p>
</div>

<div class="form-group row">
<p class="w3-margin-left">Account Officer :  <b>{{ $user['officer'] }}</b></p>
</div>


</div>











<div class="col-md-2 text-left"></div>















<div class="col-md-5"><br><br>

<div class="form-group row">
<p class="w3-margin-left">Account Code :  <b>{{ $user['glcode'] }}</b></p>
</div>


<div class="form-group row">
<p class="w3-margin-left">Balance :N  <b>{{ number_format($user['balance'] ,2)}}</b></p>
</div>


</div>

<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Debit Account Form</b></h3></div>
<div class="col-md-3"></div>
<div class="col-md-6"><br><br>
 <div class="w3-card w3-red"><br>
<form method="POST" action="{{ route('postdebit') }}" >
@csrf
<input type="text" class="form-control" name="aid" value="{{ $user['id'] }}" hidden>
@endforeach


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Amount</label>
<div class="col-md-6">
<input id="amount" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}"  onkeyup="this.value=addcommas(this.value);"   onkeyup="this.value=addcommas(this.value);" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required  >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-md-right">Narration</label>
<div class="col-md-6">
<textarea class="form-control" name="narration" required></textarea>
</div>
</div>


<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-danger w3-margin-right " href="javascript:history.back()" ><b>Back</b></a> <button type="submit" class="btn btn-lg btn-success">
{{ __('submit') }}
</button>
<br><br><br><br>
</div>
</div>
</form>
</div>

</div>
</div>





</div>

</div>
</div>
</div>
</div>
</header>
@endsection
