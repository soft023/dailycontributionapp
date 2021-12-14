@extends ('layouts.maindashboardx')
@section('title')
Registered Customers
@endsection
<!-- /.content-header -->
@section('title2')
Customer Management
@endsection

@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12">	
</div>	
<div class="col-md-4 col-sm-12 col-xs-12"></div>	
<div class="col-md-4 col-sm-12 col-xs-12 text-right">
<a class="btn btn-md w3-purple" href="{{ route('export') }}"><b>To Excel</b></a>
</div>	

</div>
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Registered Customers</b></h3>
@if (Session::has('passmsg'))
   <div class="alert alert-success">{{ Session::get('passmsg') }}</div>
@endif
</div>



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
<th>A/C</th>
<th>Balance</th>
<th>Contribution</th>
<th>Created@</th>
@if(Auth::user()->role != "Marketer" )
<th>Passbook</th>
<th>Withdrawable</th>
<th>Action</th>
@endif
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
<td>{{ number_format($cust['contribution'] ,2)}} </td>
<td>{{\Carbon\Carbon::parse($cust['created_at'])->format('d M Y')}}</td>
@if(Auth::user()->role != "Marketer" )
<td><a class="btn btn-danger " href="/customer/passbook/{{$cust['id']}}" ><b>Request</b></a></td>
@if($cust['withdrawable'] == "No")
<td><a class="btn btn-success " href="/customer/withdrawable/{{$cust['id']}}" ><b>Enable</b></a></td>
@endif
@if($cust['withdrawable'] == "Yes")
<td><a class="btn btn-success " href="/customer/disablewithdrawable/{{$cust['id']}}" ><b>Disable</b></a></td>
@endif
<td><a class="btn btn-primary " href="/customer/update/{{$cust['id']}}" ><i class="fa fa-edit"></i><b>Update</b></a></td>
@endif
<td><a class="btn btn-warning " href="/customer/info/{{$cust['id']}}" ><i class="fa fa-search"></i><b>View</b></a></td>
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

