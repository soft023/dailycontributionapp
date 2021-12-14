@extends ('layouts.maindashboardx')
@section('title')
Bankone Upload Ticket 
@endsection
<!-- /.content-header -->
@section('title2')
Bankone Ticket
@endsection

@section('maincontent')
 @if (Session::has('messagexxx'))
   <div class="alert alert-danger">{{ Session::get('messagexxx') }}</div>
@endif
<section>
<div class="text-right w3-margin-right">

</div>
<header class="masthead text-center text-white">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12">	
</div>	
<div class="col-md-4 col-sm-12 col-xs-12"></div>	
<div class="col-md-4 col-sm-12 col-xs-12 text-right">

@if($status == "Close" || $status == "")
<a class="btn btn-success " href="/business/enable" ><b>Open Business</b></a>
@endif
@if($status == "Open" )
<a class="btn btn-danger " href="/business/disable" ><b>Close Business</b></a>
@endif


<a class="btn btn-md w3-purple" href="{{ route('exportcabals') }}"><b>To Excel</b></a>
</div>	
</div>





<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Today's Transaction ({{$date}}) </b></h3></div>
<div class="col-md-12 col-sm-12 col-xs-12">

<div class="panel panel-default">
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>#</th>
<th>Account Number</th>
<th>Branch Code</th>
<th>Debit</th>
<th>Credit</th>
<th>Post Entry</th>
<th>Narration</th>
<th>Account Type</th>
<th>Flag</th>
</tr>
</thead>
<tbody>	
<?php   $i = 1; ?>
@foreach( $report as $cust)

<tr>
<td>{{$i}}</td>
<td>{{$cust['accountno']}}</td>
<td>{{$cust['branchcode']}}</td>
<td>{{number_format($cust['debit']  ,2)}}</td>
<td>{{number_format($cust['credit']  ,2)}}</td>
<td>{{$cust['postentry']}}</td>
<td>{{$cust['narration']}}</td>
<td>{{$cust['accounttype']}}</td>
<td>{{$cust['flag']}}</td>
</tr>
 <?php   $i++; ?>
 @endforeach

</tbody>
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
</div>
</section>
@endsection

