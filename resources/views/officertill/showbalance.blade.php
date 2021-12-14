@extends ('layouts.maindashboardx')
@section('title')
Till Balance & History
@endsection
<!-- /.content-header -->
@section('title2')
Account Officer Till
@endsection

@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Till Balance</b></h3></div>
<div class="col-md-4"></div>

<div class="col-md-4"><br><br>
@foreach( $till as $gl)
<div class="w3-card w3-yellow"><br>

<div class="form-group row">
<h3 class="w3-margin-left">Till Name :  <b>{{ $gl['name'] }}</b></h3>
</div>

<div class="form-group row">
<h3 class="w3-margin-left">Code :  <b>{{ $gl['glcode'] }}</b></h3>
</div>

<div class="form-group row">
<h3 class="w3-margin-left">Balance N:  <b>{{ number_format($gl['balance'] ,2)}} </b></h3>
</div>
<br>

<div class="col-md-4">

</div>
<a class="btn btn-lg btn-primary w3-margin-right " href="javascript:history.back()" ><i class=""></i><b>Back</b></a>
@endforeach
</div>
</div>














<div class="col-md-12 col-sm-12 col-xs-12">

<div class="panel panel-default">
<div class="panel-heading">     

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

