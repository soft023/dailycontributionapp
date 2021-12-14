<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>BG Quick Cash Loan Form</title>


<link rel="icon"  sizes="16x16" href="/companylogo/lg.jpeg">
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>





<body oncontextmenu="return false;" oncopy="return false" oncut="return false" onpaste="return false">

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
<a class="nav-link" href="/employerselection">Quick Loan</a>
</li>
</ul>
</div>
</div>
</nav>

<header class="text-center text-black " style="margin-top: 50px; padding-top:10px">
<!--     <div class="masthead-content">
      <div class="container w3-purple"  style="padding:10px">
      <h3>BG QUICK CASH LOAN</h3>
      </div>
    </div> -->
 
</header>
<br>
<section>
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 text-center w3-card w3-red">
 <h1>BG QUICK CASH LOAN</h1>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4"></div>
</div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-4 col-xm-4 text-right">
  <img src="companylogo/lg.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" width="100px" height="100px">
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xm-12 text-center w3-text-purple">
 <h2>Balogun Gambari Microfinance Bank Ltd.</h2>
 <i>No. 1 Ojagboro, Ilorin,Kwara State - Tel: +234(0)7087868386, +234(0)8166252204 </i><br>
 <i>Email: info@balogungambarimfb.com - Website: www.balogungambarimfb.com</i>
 <h4 class="w3-text-red">ACCOUNT OPENING | LOAN APPLICATION | LOAN AGREEMENT FORM</h4>
 <h6>Please do not pay cash to any Staff or Agent of Balogun Gambari MFB LTD</h6>
</div>
<div class="col-lg-2 col-md-2 col-sm-4 col-xm-4"></div>
</div>



</div>


</section>










<br><br>
<section>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
<b class="w3-red">PERSONAL DETAILS</b>
</div>


@if (Session::has('errmsg'))
   <div class="alert alert-danger">{{ Session::get('errmsg') }}</div>
@endif


@if (Session::has('sucmsg'))
   <div class="alert alert-success">{{ Session::get('sucmsg') }}</div>
@endif
</div><br>
<form method="POST" action="/confirmfederaldata" role="form">
@csrf
<div class="row w3-purple ">
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Surname</label>
<div class="col-md-8">
<input id="surname" type="text" class="form-control" name="surname"   required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">First Name</label>
<div class="col-md-8">
<input id="fname" type="text" class="form-control" name="fname"   required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Other Name</label>
<div class="col-md-8">
<input id="oname" type="text" class="form-control" name="oname" >
</div>
</div>






<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Home Address</label>
<div class="col-md-8">
<textarea class="form-control" name="address" required></textarea>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">L.G.A</label>
<div class="col-md-8">
<input id="lga" type="text" class="form-control" name="lga"   required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">State of Origin</label>
<div class="col-md-8">
<input id="origin" type="text" class="form-control" name="origin" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Nationality</label>
<div class="col-md-8">
<input id="nationality" type="text" class="form-control" name="nationality" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Id card Type</label>
<div class="col-md-8">
<select class="form-control text-center" id="idcardtype" name="idcardtype" required>
<option value="" disabled selected>Select ID</option>  
<option value="Staff ID">Staff ID</option>
<option value="Voters Card">Voters Card</option>
<option value="National ID Card">National ID Card</option>
<option value="Drivers License">Drivers License</option>
<option value="International Passport">International Passport</option>
</select>
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-center">ID Card Number</label>
<div class="col-md-8">
<input id="idcardno" type="text" class="form-control" name="idcardno">
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Issued Date(ID CARD)</label>
<div class="col-md-8">
<input id="idcarddate" type="date" class="form-control text-center" name="idcarddate">
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Expiry Date(ID CARD)</label>
<div class="col-md-8">
<input id="expirydate" type="date" class="form-control text-center" name="expirydate">
</div>
</div>
  



</div>

























<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Title</label>
<div class="col-md-8">
<select class="form-control text-center" id="title" name="title" required>
<option value="" disabled selected>Select Title</option>  
<option value="Mr">Mr</option>
<option value="Miss">Miss</option>
<option value="Mrs">Mrs</option>
<option value="Dr">Dr</option>
</select>
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Marital Status</label>
<div class="col-md-8">
<select class="form-control text-center" id="marital" name="marital" required>
<option value="" disabled selected>Select Status</option>  
<option value="Married">Married</option>
<option value="Single">Single</option>
<option value="Divorced">Divorced</option>
<option value="Widow">Widow</option>
</select>
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-center">BVN</label>
<div class="col-md-8">
<input id="bvn" type="text" class="form-control" name="bvn"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Phone Number (1)</label>
<div class="col-md-8">
<input id="phone" type="text" class="form-control" name="phone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Phone Number (2)</label>
<div class="col-md-8">
<input id="phonetwo" type="text" class="form-control" name="phonetwo" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Date of Birth</label>
<div class="col-md-8">
<input id="dob" type="date" class="form-control text-center" name="dob" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Email Address</label>
<div class="col-md-8">
<input id="email" type="email" class="form-control" name="email" >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Number of Children</label>
<div class="col-md-8">
<input id="children" type="text" class="form-control" name="children" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))">
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Name</label>
<div class="col-md-8">
<input id="nokname" type="text" class="form-control text-center" name="nokname" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Phone Number </label>
<div class="col-md-8">
<input id="nokphone" type="text" class="form-control text-center" name="nokphone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required>
</div>
</div>
  


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Relationship </label>
<div class="col-md-8">
<input id="nokrelationship" type="text" class="form-control text-center" name="nokrelationship" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Address</label>
<div class="col-md-8">
<input id="nokaddress" type="text" class="form-control text-center" name="nokaddress" required>
</div>
</div>



</div>
</div>
<br><br>







<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
<b class="w3-red">LOAN DETAILS</b>
</div>
</div><br>



<div class="row w3-purple">
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Loan Type</label>
<div class="col-md-8">
<select class="form-control text-center" id="loantype" name="loantype" required>
<option value="" disabled selected>Select Type</option>  
<option value="Quick Loan">Quick Loan</option>
<option value="Top Up Loan">Top Up Loan</option>
<option value="Pay Day Loan">Pay Day Loan</option>
<option value="Auto Loan">Auto Loan</option>
</select>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Loan Tenure</label>
<div class="col-md-8">
<select class="form-control text-center" id="tenure" name="tenure" required>
<option value="" disabled selected>Select Tenure</option>  
<option value="6">6 - months</option>
<!--<option value="12">12 - months</option>-->
<!-- <option value="Top Up Loan">Top Up Loan</option> -->
</select>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Monthly Net Pay (N)</label>
<div class="col-md-8">
<input id="net" type="text" class="form-control" name="net"onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onchange="this.value=addcommas(this.value)"required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Eligible Amount  (N)</label>
<div class="col-md-8">
<input id="eligible" type="text" class="form-control" name="eligible" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onmouseover="this.value=addcommas(this.value)"  disabled>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Loan Amount  (N)</label>
<div class="col-md-8">
<input id="loanamount" type="text" class="form-control" name="loanamount" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onmouseover="this.value=addcommas(this.value)" placeholder="Amount should not be more than eligible amount" required >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Amount in Words</label>
<div class="col-md-8">
<input id="amountinword" type="text" class="form-control" name="amountinword" required>
</div>
</div>






</div>






<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br> 

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Loan Purpose</label>
<div class="col-md-8">
<textarea class="form-control" name="purpose" ></textarea>
</div>
</div>





<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Monthly Installment (N)</label>
<div class="col-md-8">
<input id="installment" type="text" class="form-control" name="installment" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onmouseover="this.value=addcommas(this.value)" disabled >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Salary Account Number</label>
<div class="col-md-8">
<input id="salaryacount" type="text" class="form-control" name="salaryacount" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required >
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Bank Name</label>
<div class="col-md-8">
<input id="bank" type="text" class="form-control" name="bank" value="{{ old('bank') }}" required >
</div>
</div>

</div>
</div>







<br><br>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
<b class="w3-red">EMPLOYER'S DETAILS</b>
</div>
</div><br>







<div class="row w3-purple ">
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Date of Employment</label>
<div class="col-md-8">
<input id="doe" type="date" class="form-control text-center" name="doe" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Grade Level</label>
<div class="col-md-8">
<input id="grade" type="text" class="form-control" name="grade" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Office Email Address</label>
<div class="col-md-8">
<input id="officeemail" type="email" class="form-control" name="officeemail" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Office Address</label>
<div class="col-md-8">
<textarea class="form-control" name="officeaddress"></textarea>
</div>
</div>



</div>













<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>

<input id="employer" type="text" class="form-control" name="employer" value="Federal Government" hidden>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">MDA</label>
<div class="col-md-8">
<select class="form-control text-center" id="mda" name="mda" required>
<option value="" disabled selected>Select your MDA</option>  
<option value="Regular MDA'S">Regular MDA'S</option>
<option value="Paramilitary">Paramilitary</option>
<option value="NSCDC">NSCDC</option>
<option value="FMC/UTH/COLLEGE">FMC/UTH/COLLEGE</option>

</select>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Department</label>
<div class="col-md-8">
<input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Staff ID Number</label>
<div class="col-md-8">
<input id="staffid" type="text" class="form-control" name="staffid" value="{{ old('staffid') }}" >
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">IPPIS Number</label>
<div class="col-md-8">
<input id="bionumber" type="text" class="form-control" name="bionumber" required>
</div>
</div>








<div class="form-group row">
<label class="col-md-4 col-form-label text-center">My Account Officer</label>
<div class="col-md-8">
<select class="form-control text-center" id="accountofficer" name="accountofficer" required>
<option value="" disabled selected>Select Officer</option>  
@foreach( $officers as $role)
<option value="{{ $role['name']}}"> {{ $role['name']}} </option>
@endforeach
</select>
</div>
</div>




</div>



<div class="col-md-12 text-center"><br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()" ><i class=""></i><b>Back</b></a>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Continue') }}
</button>
<br><br><br>
</div></div></form>
</div>




</div>
<br><br>



</div>
</section>

  














































<!-- Footer -->
<footer class="py-5 bg-black">
<div class="container">
<p class="m-0 text-center text-white small">Copyright &copy; QUICK LOAN FORM - BGMFB IT - 2021</p>
</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
$( "#net" )
  .keyup(function() {
    var value = $( this ).val();
    var ten = $( "#tenure" ).val()
    if (ten == 6 ){
    	var rate = 3;
    }else{
    	var rate = 4;
    }
    $( "#eligible" ).val( value * rate);
  })
  .keyup();
</script>

<script type="text/javascript">

    function addcommas(x) {
    //remove commas
    retVal = x ? parseFloat(x.replace(/,/g, '')) : 0;

    //apply formatting
    return retVal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
  </script>

<script>

$( "#loanamount" )
  .keyup(function() {
    var loanamt = $( this ).val();
    var tenure = $( "#tenure" ).val();
    $( "#installment" ).val( (loanamt / tenure ) + (loanamt * (3.5 / 100)));
  })
  .keyup();


</script>

</body>
</html>
