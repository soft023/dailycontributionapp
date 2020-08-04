@extends ('layouts.maindashboardx')
@section('title')
All Registered Company
@endsection
<!-- /.content-header -->
@section('title2')
Backend
@endsection

@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>All Registered Company</b></h3></div>



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
<th>Code</th>
<th>Name</th>
<th>Phone</th>
<th>Status</th>
<th>Logo</th>
<th>Action</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php   $i = 1; ?>
@foreach( $allstaff as $staff)

<tr>
<td>{{$i}}</td>
<td>{{$staff['code']}}</td>
<td>{{$staff['name']}}</td>
<td>{{$staff['phone']}}</td>
<td>{{$staff['status']}}</td>
<td><img src="{{asset('/companylogo/').'/'.$staff['logo']}}" )}}" class="img-responsive w3-circle  w3-hover-opacity" width="40px" height="40px" alt="Staff Image"/></td>
<td> <a class="btn btn-success " href="/backend/viewcompany/{{$staff['id']}}" ><i class="fa fa-search"></i><b>View more</b></a></td>
<td> <a class="btn btn-primary " href="/backend/updatecompany/{{$staff['id']}}" ><i class="fa fa-edit"></i><b>Update</b></a></td>

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

