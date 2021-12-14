@extends ('layouts.maindashboardx')
@section('title')
Report By Till
@endsection
<!-- /.content-header -->
@section('title2')
Transaction Analysis By Accounts
@endsection

@section('maincontent')

<section>
<div class="text-right w3-margin-right">
<form method="POST" action={{ route('searchofficerreport') }}>
@csrf
<label>Officer Tills</label>
<select  id="officer" name="officer" required>
<option value="" disabled selected>Select Till</option>  
@foreach( $account as $account)
<option value="{{ $account['officer']}}"> {{ $account['name']}} </option>
@endforeach
</select>
<label>From</label>
    <input type="date" name="from" required>
<label>To</label>
    <input type="date" name="to" required>

    <button type="submit" class="btn btn-lg btn-success" >Search</button>
</form>
</div>

<div class="text-left">
</div>
<header class="masthead text-center text-white">

<div class="container">
<div class="row justify-content-left text-dark">


<div class="col-md-12 text-center w3-red"><h3><b>Report By Account Officers </b></h3></div>


<div class="col-md-12 col-sm-12 col-xs-12">

<div class="panel panel-default">
<div class="panel-heading">     

</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped w3-table w3-bordered table-bordered table-hover">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Account Number</th>
<th>Dr</th>
<th>Cr</th>
<th>Type</th>
<th>Narration</th>
<th>Time</th>
</tr>
</thead>

</table>

</div>
</div>
</div>

</div>
<div class="col-md-12 text-center"><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>


</div>
</div>
</div>
</section>
@endsection

