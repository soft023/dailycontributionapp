@extends ('layouts.maindashboardx')
@section('title')
Bankone Voucher
@endsection
<!-- /.content-header -->
@section('title2')
Bankone Upload Ticket
@endsection

@section('maincontent')
 @if (Session::has('messagexxx'))
   <div class="alert alert-danger">{{ Session::get('messagexxx') }}</div>
@endif
<section>
<div class="text-right w3-margin-right">
<form>
 <input type="button" class="btn-warning btn-lg"  value="Print" onClick="printReport()">
</form>
</div>
<br>

<div class="text-right w3-margin-right">
<form method="POST" action={{ route('searchvoucher') }}>
@csrf
<label>From</label>
    <input type="date" name="from" required>
<label>To</label>
    <input type="date" name="to" required>

    <button type="submit" class="btn btn-lg btn-success" >Search</button>
</form>
</div>



<header class="masthead text-center text-white">
<div id="calloverPrinting">
<div class="container">

<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Today's Transaction ({{$date}}) </b></h3></div>
<div class="col-md-12 col-sm-12 col-xs-12">

<div class="panel panel-default">
<div class="panel-heading">     

</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Account Number</th>
<th>Debit</th>
<th>Credit</th>
<th>Narration</th>
<th>Date</th>

</tr>
</thead>
<tbody>	
<?php   $i = 1; ?>
@foreach( $report as $cust)

<tr>
<td>{{$i}}</td>
<td>{{$cust['title']}}</td>
<td>{{$cust['accountno']}}</td>
<td>{{number_format($cust['debit']  ,2)}}</td>
<td>{{number_format($cust['credit']  ,2)}}</td>
<td>{{$cust['narration']}}</td>
<td>{{$cust['created_at']}}</td>
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
</div>
</section>
@endsection

