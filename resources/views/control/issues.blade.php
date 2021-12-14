@extends ('layouts.maindashboardxx')
@section('title')
Control Section
@endsection
<!-- /.content-header -->
@section('title2')
Discovered Issues
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
<div class="col-md-12 text-center w3-red"><h3><b>Suspected Accounts</b></h3></div>



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
<th>Name</th>
<th>Account No</th>
<th>Contact</th>
<th>Expected</th>
<th>Actual</th>
<th>Poster</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php   $i = 1; ?>
@foreach( $issues as $cust)

<tr class="w3-red">
<td>{{$i}}</td>
<td>{{$cust['name']}}</td>
<td>{{$cust['accountno']}}</td>
<td>{{$cust['phoneno']}}</td>
<td>N{{number_format($cust['contribution']  ,2)  }}</td>
<td>N{{number_format($cust['difference']  ,2)  }}</td>
<td>{{$cust['poster']}}</td>
<td>{{$cust['created_at']}}</td>
<td><a class="btn btn-success " href="/control/resolved/{{$cust['id']}}" ><i class="fa fa-edit"></i><b>Resolved</b></a></td>
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

