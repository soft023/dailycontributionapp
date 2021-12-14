@extends ('layouts.maindashboardx')
@section('title')
Teller's Till
@endsection
<!-- /.content-header -->
@section('title2')
My Till
@endsection
@include('layouts.flash')
@section('maincontent')
<section>
<header class="masthead text-center text-white">
<div class="container">
<div class="row justify-content-left text-dark">
<div class="col-md-12 text-center w3-red"><h3><b>Till Status</b></h3></div>
<div class="col-md-3"></div>
<div class="col-md-6"><br><br>

 <div class="w3-card w3-yellow"><br>
{{-- @foreach($tell as $tell )
  <h1>Balance - N {{$tell['balance']}}</h1><br>
 @endforeach --}}

  <h1>Balance - N {{ number_format($balance ,2)}}</h1><br>
  <h2>Total Deposits - N {{ number_format($deposit ,2)}}</h2><br>
  <h2>Total Withdrawal - N {{ number_format($withdrawal ,2)}}</h2><br>



</div> 
<br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()" ><b>Back</b></a><br><br><br>





</div>

</div>
</div>
</div>
</div>
</section>
@endsection

