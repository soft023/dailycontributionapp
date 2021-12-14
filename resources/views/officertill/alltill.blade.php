@extends ('layouts.maindashboardx')
@section('title')
All Registered Till
@endsection
<!-- /.content-header -->
@section('title2')
Account Officers Till
@endsection

@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>All Tills</b></h3></div>



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
<th>Code</th>
<th>Bankone</th>
<th>Officer</th>
<th>Balance</th>
<th>Status</th>

<!--<th>Action</th>-->
</tr>
</thead>
<tbody>
<?php   $i = 1; ?>
@foreach( $tills as $gl)

<tr>
<td>{{$i}}</td>
<td>{{$gl['name']}}</td>
<td>{{$gl['glcode']}}</td>
<td>{{$gl['bankone']}}</td>
<td>{{$gl['officer']}}</td>
<td>{{ number_format($gl['balance'] ,2)}} </td>
<td>{{$gl['status']}}</td>
<!--<td><a class="btn btn-danger " href="/officertill/updatetill/{{$gl['id']}}" ><i class="fa fa-edit"></i><b>Update</b></a></td>-->
</tr>
 <?php   $i++; ?>
 @endforeach
 
</tbody>
</table>
 {{$tills->links()}}
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

