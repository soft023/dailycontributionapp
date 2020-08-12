@extends ('layouts.maindashboardx')
@section('title')
All Registered Users
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
<div class="col-md-12 text-center w3-red"><h3><b>All Registered Users</b></h3></div>



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
<th>Username</th>
<th>Role</th>
<th>Status</th>
<th>Action</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php   $i = 1; ?>
@foreach( $users as $user)

<tr>
<td>{{$i}}</td>
<td>{{$user['firstname']}}</td>
<td>{{$user['surname']}}</td>
<td>{{$user['username']}}</td>
<td>{{$user['role']}}</td>
<td>{{$user['status']}}</td>
<td><a class="btn btn-danger " href="/usermanagement/updateuser/{{$user['id']}}" ><i class="fa fa-edit"></i><b>Update</b></a></td>
<td><a class="btn btn-warning " href="/usermanagement/viewuser/{{$user['id']}}" ><i class="fa fa-edit"></i><b>View</b></a></td>
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

