@extends ('layouts.maindashboardx')
@section('title')
Account Search List
@endsection
<!-- /.content-header -->
@section('title2')
Account History
@endsection

@section('maincontent')
 @if (Session::has('message'))
   <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif
<section>
<div class="text-right w3-margin-right">
<a class="btn btn-lg btn-primary" href="javascript:history.back()"><i class=""></i><b>Back</b></a>
</div>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Account Search Result</b></h3></div>



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
<th>Account Code</th>
<th>Balance</th>
<th>Account Officer</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php   $i = 1; ?>
@foreach( $accounts as $cust)

<tr>
<td>{{$i}}</td>
<td>{{$cust['name']}}</td>
<td>{{$cust['glcode']}}</td>
<td>{{number_format($cust['balance']  ,2)}}</td>
<td>{{$cust['officer']}}</td>
<td>{{$cust['status']}}</td>
<td><a class="btn btn-warning " href="/report/account/{{$cust['glcode']}}" ><i class="fa fa-edit"></i><b>View History</b></a></td>
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

