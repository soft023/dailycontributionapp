@extends('layouts.maindashboardxx')
@section('title')
Customer Account Balance
@endsection
<!-- /.content-header -->
@section('title2')
Account Balance
@endsection
@section('maincontent')
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Current Balance</b></h3></div>
<div class="col-md-4"></div>

@foreach( $customer as $user)




<div class="col-md-4"><br><br>
<div class="w3-card w3-yellow"><br>
<h1> N {{ number_format($user['balance'] ,2)}} </h1><br>
</div> 
</div>


<div class="col-md-4"><br><br>
@endforeach

</div>
<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()"><i class=""></i><b>Back</b></a><br><br><br><br><br><br>
</div>

</div>

</div>
</div>
</div>
</div>
</header>
@endsection
