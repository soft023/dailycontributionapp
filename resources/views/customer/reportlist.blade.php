@extends ('layouts.maindashboardx')
@section('title')
Customer Account Report
@endsection
<!-- /.content-header -->
@section('title2')
Account Report
@endsection

@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Search list</b></h3></div>



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
<th>First Name</th>
<th>Surname</th>
<th>Account Number</th>
<th>Balance</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php   $i = 1; ?>
@foreach( $customers as $cust)

<tr>
<td>{{$i}}</td>
<td>{{$cust['firstname']}}</td>
<td>{{$cust['surname']}}</td>
<td>{{$cust['accountno']}}</td>
<td>{{ number_format($cust['balance'] ,2)}} </td>
<td><a class="btn btn-warning " href="/customer/report/{{$cust['accountno']}}" ><i class="fa fa-edit"></i><b>View</b></a></td>
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

