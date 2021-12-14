@extends ('layouts.maindashboardxx')
@section('title')
Statement Of Account
@endsection
<!-- /.content-header -->
@section('title2')
Statement Of Account
@endsection

@section('maincontent')
 @if (Session::has('message'))
   <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif
<section>
<div class="text-right w3-margin-right">
<form>
<br>  <input type="button" class="btn-danger btn-lg"  value="Print" onClick="printReport()">
</form>
<a class="btn btn-lg btn-primary" href="/customer/report"><i class="text-right"></i><b>Back</b></a>
</div>


<div class="reportPrinting" id="reportPrinting" style="font-size: 12px">
<div class="row" >
<div class="col-md-5 col-sm-12" ><b>

<img src="../../companylogo/lg.jpeg" alt="BGMFB LOGO" class="img" width="120px" height="120px"  style="margin-top: 30px">


</b></div>	
<div class="col-md-3 col-sm-12" ></div>	
<div class="col-md-4 col-sm-12 text-left" style="text-align: right" >
<h6 style="font-size: 12px" >Bank Name - <label>  Balogun Gambari Microfinance Bank</label></h6>
<h6 style="font-size: 12px"  >Product- <label> Daily Contribution</label></h6>
<h6 style="font-size: 12px" >Account Number - <label>  {{$accountno}}</label></h6>
<h6 style="font-size: 12px" >Account Name - <label>  {{$name}}</label></h6>
<h6 style="font-size: 12px" >Total Debit - <label> N{{ number_format($dr,2) }}</label></h6>
<h6 style="font-size: 12px" >Total Credit - <label> N{{ number_format($cr,2) }}</label></h6>
<h6 style="font-size: 12px" >Current Balance - <label> N{{ number_format($balance,2) }}</label></h6>
</div>	

</div>









<header class="masthead text-center text-white">



<div class="container">
<div class="row justify-content-left text-dark">

<div class="col-md-12 text-center w3-red"><h4><b>Statement Of Account</b></h4></div>



<div class="col-md-12 col-sm-12 col-xs-12">

<div class="panel panel-default">
<div class="panel-heading">     

</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table w3-table w3-bordered table-striped ">
<thead>
<tr>
<th>#</th>
<th>Date</th>
<th>Poster</th>
<th>Narration</th>
<th>Dr</th>
<th>CR</th>
<th>Balance</th>

</tr>
</thead>
<tbody>
<?php  $i = ($report->currentpage() - 1) * $report->perpage() + 1; ?>	
@foreach( $report as $cust)
<tr>
<td>{{$i}}</td>	
<td >{{$cust['created_at']}}</td>
<td>{{$cust['postedby']}}</td>
<td>{{$cust['narration']}}</td>
<td>N{{ number_format($cust['dr'],2) }}</td>
<td>N{{ number_format($cust['cr'],2) }}</td>
<td>N{{number_format($cust['balance'],2)}}</td>
</tr></div>
 <?php   $i++; ?>
 @endforeach

</tbody>
</table>
</div></div>
 {{$report->links()}}
</div>

</div></div></div>
</div>
</div>
<div class="col-md-12 text-center"><br><br><br><br><br><br><br><br><br><br><br>
</div>





</section>
@endsection

