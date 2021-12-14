@extends ('layouts.maindashboardx')
@section('title')
All Transaction History
@endsection
<!-- /.content-header -->
@section('title2')
All Transactions 
@endsection

@section('maincontent')
 @if (Session::has('messagexxx'))
   <div class="alert alert-danger">{{ Session::get('messagexxx') }}</div>
@endif
<section>
<div class="text-left ">
<a class="btn btn-lg btn-primary" href="javascript:history.back()"><b>Back</b></a>
</div>
<div class="text-right w3-margin-right">
<form method="POST" action={{ route('searchtrans') }} >
@csrf
<label>From</label>
    <input type="date" name="from" required>
<label>To</label>
    <input type="date" name="to" required>

    <button type="submit" class="btn btn-lg btn-success" >Search</button>
</form>
</div>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>All Transactions </b></h3></div>



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
<th>Narration</th>
<th>Poster</th>
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
<td>{{$cust['narration']}}</td>
<td>{{$cust['postedby']}}</td>
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

