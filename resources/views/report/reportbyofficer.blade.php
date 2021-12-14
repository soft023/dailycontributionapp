@extends ('layouts.maindashboardx')
@section('title')
Report By Till
@endsection
<!-- /.content-header -->
@section('title2')
Transaction Analysis
@endsection

@section('maincontent')

<section>


<div class="text-right w3-margin-right">

</div>


<header class="masthead text-center text-white">


<div class="row" >
<div class="col-md-6 col-sm-12 text-left" >
<form>
<input type="button" class="btn-warning btn-lg"  value="Print" onClick="printReport()">
</form>
</div>	
<div class="col-md-6 col-sm-12 text-right">

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

</div>


<div class="container">
<div id="calloverPrinting">
<div class="row justify-content-left text-dark">


<div class="col-md-12 text-center w3-red"><h3><b>Report By Account Officers</b></h3></div>



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
<tbody>
<?php  $i = ($report->currentpage() - 1) * $report->perpage() + 1; ?>	
@foreach( $report as $cust)

<tr>
<td>{{$i}}</td>
<td>{{$cust['name']}}</td>
<td>{{$cust['accountno']}}</td>
<td>{{number_format($cust['dr']  ,2)}}</td>
<td>{{number_format($cust['cr']  ,2)}}</td>
<td>{{$cust['postcode']}}</td>
<td>{{$cust['narration']}}</td>
<td>{{$cust['updated_at']}}</td>

</tr>
 <?php   $i++; ?>
 @endforeach

</tbody>
</table>
{{$report->links()}}
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
</div>
</section>
@endsection

