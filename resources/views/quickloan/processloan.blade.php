<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>BG Quick Cash Loan Form</title>


<link rel="icon"  sizes="16x16" href="../../companylogo/lg.jpeg">
<!-- Bootstrap core CSS -->
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../css/w3.css">
<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/one-page-wonder.min.css" rel="stylesheet">

</head>





<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg w3-red navbar-custom fixed-top">
<div class="container">
<a class="navbar-brand" href="/">BGMFB</a>
<button class="navbar-toggler w3-purple" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon w3-purple"><<</span>

</button>

<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="btn btn-lg btn-outline-warning" href="javascript:history.back()"><i class=""></i><b>Back</b></a>
</li>
</ul>
</div>
</div>
</nav>

<header class="text-center text-black " style="margin-top: 50px; padding-top:10px"> 
</header>
<br>
<section>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 text-center w3-card w3-red">
 <h4>BG QUICK CASH LOAN</h4>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4"></div>
</div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-4 col-xm-4 text-right">
  <img src="../../companylogo/lg.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" width="60px" height="60px">
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xm-12 text-center w3-text-purple">
 <h3>Balogun Gambari Microfinance Bank Ltd.</h3>
 <h5 class="w3-text-red">ACCOUNT OPENING | LOAN APPLICATION | LOAN AGREEMENT FORM</h5>

</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-xm-4"></div>
</div>
</div>
</section>

<section>
@foreach($details as $data)
<div class="container">

<h4 class="w3-red text-center">Personal Information</h4>
<div class="row text-center	w3-card">
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left" >
<h6><b>Title:</b> {{ $data['title'] }}</h6> 
<h5><b>BVN:</b> {{ $data['bvn'] }}</h5>
<h6><b>ID card Type:</b> {{ $data['idtype'] }}</h6>
<h5><b>DOB:</b> {{ $data['dob'] }}</h5>
<h6><b>NOK Name:</b> {{ $data['nokname'] }}</h6>
<h6><b>NOK Phone Number:</b> {{ $data['nokphone'] }}</h6>	
</div>


<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Surname:</b> {{ $data['surname'] }}</h6> 
<h6><b>Phone Number 1:</b> {{ $data['phoneone'] }}</h6>
<h6><b>ID Number:</b> {{ $data['idcardno'] }}</h6>
<h6><b>Number of Children :</b> {{ $data['noofchildren'] }}</h6>
<h6><b>Email:</b> {{ $data['email'] }}</h6>	
<h6><b>NOK Relationship</b> {{ $data['nokrelationship'] }}</h6>	
</div>


<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Firstname:</b> {{ $data['firstname'] }}</h6>
<h6><b>Phone Number 2:</b> {{ $data['phonetwo'] }}</h6>
<h6><b>Issuance Date:</b> {{ $data['idissuedate'] }}</h6>
<h6><b>Nationality:</b> {{ $data['nationality'] }}</h6>
<h6><b>L.G.A:</b> {{ $data['lga'] }}</h6>	
<h6><b>NOK Address</b> {{ $data['nokaddress'] }}</h6>
	

</div>


<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Othername:</b> {{ $data['othername'] }}</h6>
<h6><b>Marital Status:</b> {{ $data['maritalstatus'] }}</h6>
<h6><b>Expiry Date:</b> {{ $data['idexpirydate'] }}</h6>
<h6><b>State of Origin:</b> {{ $data['stateoforigin'] }}</h6>
<h6><b>Account Officer:</b> {{ $data['accountofficer'] }}</h6> 
<h6><b>Address:</b> {{ $data['homeaddress'] }}</h6>	
</div>
</div>




<h4 class="w3-red text-center">Loan Details</h4>
<div class="row text-center	w3-card">
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left" >
<h6><b>Type:</b> {{ $data['loantype'] }}</h6> 
<h6><b>Loan Amount:</b>N {{ $data['loanamount'] }}</h6> 
<h6><b>Purpose:</b> {{ $data['loanpurpose'] }}</h6> 
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Tenure:</b> {{ $data['tenure'] }}</h6>
<h6><b>Salary A/C:</b> {{ $data['salaryacount'] }}</h6> 


</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Net:N</b> {{ $data['net'] }}</h6> 
<h6><b>Bank:</b> {{ $data['bankname'] }}</h6>

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Installment:</b>N {{ number_format((float)(( str_replace(',', '',$data['loanamount']) / $data['tenure'] ) + (3.5/100 * str_replace(',', '',$data['loanamount'])) ),2,'.','')}}</h6> 
<h6><b>Amount in word:</b> {{ $data['amountinword'] }}</h6>		
</div>
</div>







<h4 class="w3-red text-center">Employer's Information( {{ $data['category'] }})</h4>
<div class="row text-center	w3-card">
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left" >
<h6><b>DOE:</b> {{ $data['doe'] }}</h6> 
<h6><b>Staff ID No:</b> {{ $data['staffidno'] }}</h6> 

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>MDA:</b> {{ $data['mda'] }}</h6>
<h6><b>IPPIS | Biometric:</b> {{ $data['biometricno'] }}</h6>

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Department:</b> {{ $data['nokphone'] }}</h6> 
<h6><b>Email:</b> {{ $data['officeemail'] }}</h6> 

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<h6><b>Grade Level:</b> {{ $data['gradelevel'] }}</h6>
<h6><b>Address:</b> {{ $data['officeaddress'] }}</h6>
</div>
</div>






<h4 class="w3-red text-center">Other Information</h4>
<div class="row text-center	w3-card">

<div class="col-lg-4 col-md-4	col-sm-4 col-xm-4	" >
<img src="../../loanpassport/{{ $data['loanpassport'] }}" alt="Passport" width="200px" height="200px" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanpassport/{{ $data['loanpassport'] }}"><b>Click For Passport Photograph</b></a></h6>

<img src="../../loanvalidid/{{ $data['loanvalidid'] }}" alt="Valid ID" width="200px" height="200px" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanvalidid/{{ $data['loanvalidid'] }}"><b>Click For Valid ID</b></a></h6>
</div>

<div class="col-lg-4 col-md-4	col-sm-4 col-xm-4	" >
<img src="../../loansignature/{{ $data['loansignature'] }}" alt="Signature" width="200px" height="200px" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loansignature/{{ $data['loansignature'] }}"><b>Click For signature</b></a></h6>

<img src="../../loanletter/{{ $data['loanletter'] }}" alt="Employment Letter" width="200px" height="200px" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanletter/{{ $data['loanletter'] }}"><b>Click For Employment Letter</b></a></h6>
</div>





<div class="col-lg-4 col-md-4	col-sm-4 col-xm-4	" >
<img src="../../loanstaffidcard/{{ $data['loanstaffidcard'] }}" alt="stafdidcard" width="200px" height="200px" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanstaffidcard/{{ $data['loanstaffidcard'] }}"><b>Click For Staff ID</b></a></h6>

<img src="../../loanpayslip/{{ $data['loanpayslip'] }}" alt="payslip" width="200px" height="200px" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanpayslip/{{ $data['loanpayslip'] }}"><b>Click For Payslip</b></a></h6>
</div>
</div>

<br><br>
@if (Auth::user()->role != "Credit")  
<h4 class="w3-purple text-left">Credit Comment</h4>
<div class="row text-center	w3-card">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 text-left" >
<h6><b>Comment By :</b> {{ $data['credit'] }}</h6> 
<h6><b>Comment:</b> {{ $data['creditcomment'] }}</h6>
</div>
</div>
@endif 




@if (Auth::user()->role != "Credit" && Auth::user()->role != "Control" )  
<h4 class="w3-purple text-left">Control Comment</h4>
<div class="row text-center	w3-card">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 text-left" >
<h6><b>Comment By :</b> {{ $data['control'] }}</h6> 
<h6><b>Comment:</b> {{ $data['controlcomment'] }}</h6>
</div>
</div>
@endif 




@if (Auth::user()->role != "Credit" && Auth::user()->role != "Control" && Auth::user()->role != "Fincon" )  
<h4 class="w3-purple text-left">Fincon Comment</h4>
<div class="row text-center	w3-card">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 text-left" >
<h6><b>Comment By :</b> {{ $data['fincon'] }}</h6> 
<h6><b>Comment:</b> {{ $data['finconcomment'] }}</h6>
</div>
</div>
@endif 



@if (Auth::user()->role != "Credit" && Auth::user()->role != "Control" && Auth::user()->role != "Fincon" && Auth::user()->role != "Md")  
<h4 class="w3-purple text-left">MD | CEO  Comment</h4>
<div class="row text-center	w3-card">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 text-left" >
<h6><b>Comment By :</b> {{ $data['md'] }}</h6> 
<h6><b>Comment:</b> {{ $data['mdcomment'] }}</h6>
</div>
</div>
@endif 


<br><br>

<h4 class="w3-purple text-center">{{Auth::user()->role}} - Comment</h4>
<div class="row text-center	w3-card">
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3" ></div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6" ><br><br>
<form method="POST" action="{{ route('credit') }}" >	
@csrf
<input type="text" class="form-control" name="lid" value="{{ $data['id'] }}" hidden>
<div class="form-group row">
<textarea class="form-control" name="comment" rows="5" cols="10"> </textarea>
</div>

<div class="col-md-12 text-center"><br>
<button type="submit" class="btn btn-lg btn-outline-danger">
{{ __('submit') }}
</button>
<br><br>
</div>

</form>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3" ></div>


</div>



</div>
@endforeach
</section>
















































<!-- Footer -->
<footer class="py-5 bg-black">
<div class="container">
<p class="m-0 text-center text-white small">Copyright &copy; QUICK LOAN - BGMFB IT 2020</p>
</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- <script>
$( "#net" )
  .keyup(function() {
    var value = $( this ).val();
    $( "#eligible" ).val( value * 3);
  })
  .keyup();
</script> -->


<!-- 
<script>

$( "#loanamount" )
  .keyup(function() {
    var loanamt = $( this ).val();
    var tenure = $( "#tenure" ).val();
    $( "#installment" ).val( (loanamt / tenure ) + (loanamt * (3.5 / 100)));
  })
  .keyup();


</script> -->

<script type="text/javascript">

    function addcommas(x) {
    //remove commas
    retVal = x ? parseFloat(x.replace(/,/g, '')) : 0;

    //apply formatting
    return retVal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
  </script>

</body>
</html>
