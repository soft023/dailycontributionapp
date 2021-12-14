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
 <h6>Please be informed that by completing this form and accepting our terms & conditions, you have given BGMFB an instruction to transfer your loan sum (net of charges) to your Salary Account or to Pay you in person.</h6>
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
</div><br>

<form method="POST" action="submitstatedata" enctype="multipart/form-data">
@csrf
<div class="row w3-purple ">
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Surname</label>
<div class="col-md-8">
<input id="surname" type="text" class="form-control" name="surname" value="{{$data['surname']}}"  required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">First Name</label>
<div class="col-md-8">
<input id="fname" type="text" class="form-control" name="fname" value="{{$data['fname']}}"  required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Other Name</label>
<div class="col-md-8">
<input id="oname" type="text" class="form-control" name="oname" value="{{$data['oname']}}"  >
</div>
</div>






<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Home Address</label>
<div class="col-md-8">
<textarea class="form-control" name="address" required>{{$data['address']}}</textarea>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">L.G.A</label>
<div class="col-md-8">
<input id="lga" type="text" class="form-control" name="lga" value="{{$data['lga']}}"  required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">State of Origin</label>
<div class="col-md-8">
<input id="origin" type="text" class="form-control" name="origin" value="{{$data['origin']}}"  required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Nationality</label>
<div class="col-md-8">
<input id="nationality" type="text" class="form-control" name="nationality" value="{{$data['nationality']}}"  required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">ID Card Type</label>
<div class="col-md-8">
<select class="form-control text-center" id="idcardtype" name="idcardtype" required>
<option value="{{$data['idcardtype']}}"  selected>{{$data['idcardtype']}}</option>  
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
<input id="idcardno" type="text" class="form-control" name="idcardno" value="{{$data['idcardno']}}"  >
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Issued Date(ID CARD)</label>
<div class="col-md-8">
<input id="idcarddate" type="date" class="form-control text-center" name="idcarddate" value="{{$data['idcarddate']}}" >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Expiry Date(ID CARD)</label>
<div class="col-md-8">
<input id="expirydate" type="date" class="form-control text-center" name="expirydate" value="{{$data['expirydate']}}" >
</div>
</div>



</div>

























<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Title</label>
<div class="col-md-8">
<select class="form-control text-center" id="title" name="title" required>
<option value="{{$data['title']}}"  selected>{{$data['title']}}</option>  
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
<option value="{{$data['marital']}}" selected>{{$data['marital']}}</option>  
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
<input id="bvn" type="text" class="form-control" name="bvn" value="{{$data['bvn']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Phone Number (1)</label>
<div class="col-md-8">
<input id="phone" type="text" class="form-control" name="phone" value="{{$data['phone']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Phone Number (2)</label>
<div class="col-md-8">
<input id="phonetwo" type="text" class="form-control" name="phonetwo" value="{{$data['phonetwo']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
</div>
</div>




<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Date of Birth</label>
<div class="col-md-8">
<input id="dob" type="date" class="form-control text-center" name="dob" value="{{$data['dob']}}" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Email Address</label>
<div class="col-md-8">
<input id="email" type="email" class="form-control" name="email" value="{{$data['email']}}" >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Number of Children</label>
<div class="col-md-8">
<input id="children" type="text" class="form-control" name="children" value="{{$data['children']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Name</label>
<div class="col-md-8">
<input id="nokname" type="text" class="form-control text-center" name="nokname" value="{{$data['nokname']}}" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Phone Number </label>
<div class="col-md-8">
<input id="nokphone" type="text" class="form-control text-center" value="{{$data['nokphone']}}" name="nokphone" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required>
</div>
</div>
  


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Relationship </label>
<div class="col-md-8">
<input id="nokrelationship" type="text" class="form-control text-center" value="{{$data['nokrelationship']}}" name="nokrelationship" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Next Of Kin Address</label>
<div class="col-md-8">
<input id="nokaddress" type="text" class="form-control text-center" value="{{$data['nokaddress']}}" name="nokaddress" required>
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
<option value="{{$data['loantype']}}"  selected>{{$data['loantype']}}</option>  
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
<option value="{{$data['tenure']}}"  selected>{{$data['tenure']}} - months</option>  
{{-- <option value="6">6 - months</option> --}}
<!-- <option value="Top Up Loan">Top Up Loan</option> -->
</select>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Monthly Net Pay (N)</label>
<div class="col-md-8">
<input id="net" type="text" class="form-control" name="net" value="{{$data['net']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onchange="this.value=addcommas(this.value)"disabled>
</div>
<input id="net" type="text" class="form-control" name="net" value="{{$data['net']}}" hidden>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Eligible Amount  (N)</label>
<div class="col-md-8">
<input id="eligible" type="text" class="form-control" name="eligible" value="{{$eligible}}" onmouseover="this.value=addcommas(this.value)" disabled>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Loan Amount  (N)</label>
<div class="col-md-8">
<input id="loanamount" type="text" class="form-control" name="loanamount" value="{{$data['loanamount']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onmouseover="this.value=addcommas(this.value)" placeholder="Amount should not be more than eligible amount" disabled >
<input id="loanamount" type="text" class="form-control" name="loanamount" value="{{$data['loanamount']}}" hidden >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Amount in Words</label>
<div class="col-md-8">
<input id="amountinword" type="text" class="form-control" name="amountinword" value="{{$data['amountinword']}}" disabled>
<input id="amountinword" type="text" class="form-control" name="amountinword" value="{{$data['amountinword']}}" hidden>
</div>
</div>






</div>






<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br> 

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Loan Purpose</label>
<div class="col-md-8">
<textarea class="form-control" name="purpose" >{{$data['purpose']}}</textarea>
</div>
</div>





<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Monthly Installment (N)</label>
<div class="col-md-8">
<input id="installment" type="text" class="form-control" name="installment" value="{{$installment}}"  onmouseover="this.value=addcommas(this.value)" disabled >
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Salary Account Number</label>
<div class="col-md-8">
<input id="salaryacount" type="text" class="form-control" name="salaryacount" value="{{$data['salaryacount']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required >
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center"> Bank Name</label>
<div class="col-md-8">
<input id="bank" type="text" class="form-control" name="bank" value="{{$data['bank']}}" required >
</div>
</div>

</div>
</div>







<br><br>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
<b class="w3-red">EMPLOYEE'S DETAILS</b>



</div>
</div><br>







<div class="row w3-purple ">
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>
<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Date of Employment</label>
<div class="col-md-8">
<input id="doe" type="date" class="form-control text-center" name="doe" value="{{$data['doe']}}" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Grade Level</label>
<div class="col-md-8">
<input id="grade" type="text" class="form-control" name="grade" value="{{$data['grade']}}" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Passport Photograph</label>
<div class="col-md-8">
<input type="file" id="passport" class="form-control" name="passport" required />   
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Signature</label>
<div class="col-md-8">
<input type="file" id="signature" class="form-control" name="signature"  required /> 
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Valid ID CARD</label>
<div class="col-md-8">
<input type="file" id="vidcard" class="form-control" name="vidcard"  required /> 
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Staff ID CARD</label>
<div class="col-md-8">
<input type="file" id="sidcard" class="form-control" name="sidcard"  required /> 
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Confirmation Letter Or Promotion letter</label>
<div class="col-md-8">
<input type="file" id="letter" class="form-control" name="letter"  required /> 
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Recent Payslip</label>
<div class="col-md-8">
<input type="file" id="payslip" class="form-control" name="payslip" required /> 
</div>
</div>





</div>


<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12"><br>


<input id="employer" type="text" class="form-control" name="employer" value="State Government" hidden>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">MDA</label>
<div class="col-md-8">
<select class="form-control text-center" id="mda" name="mda" required>
<option value="{{$data['mda']}}"  selected>{{$data['mda']}}</option>  
<option value="Teaching Service Commission">Teaching Service Commission</option>
<option value="Ministry of Works">Ministry of Works</option>
<option value="SUBEB">SUBEB</option>
<option value="Electricity Board">Electricity Board</option>
<option value="State Fire Service">State Fire Service</option>
<option value="Ministry of Tertiary">Ministry of Tertiary</option>
<option value="Ilorin East Local Government">Ilorin East Local Government</option>
<option value="Asa Local Government">Asa Local Government</option>
</select>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Department</label>
<div class="col-md-8">
<input id="department" type="text" class="form-control" name="department" value="{{$data['department']}}" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Staff ID Number</label>
<div class="col-md-8">
<input id="staffid" type="text" class="form-control" name="staffid" value="{{$data['staffid']}}" >
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Biometric Number</label>
<div class="col-md-8">
<input id="bionumber" type="text" class="form-control" name="bionumber" value="{{$data['bionumber']}}" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Office Email Address</label>
<div class="col-md-8">
<input id="officeemail" type="email" class="form-control" name="officeemail" value="{{$data['officeemail']}}" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label text-center">Office Address</label>
<div class="col-md-8">
<textarea class="form-control" name="officeaddress" > {{$data['officeaddress']}} </textarea>
</div>
</div>



<div class="form-group row">
<label class="col-md-4 col-form-label text-center">My Account Officer</label>
<div class="col-md-8">
<select class="form-control text-center" id="accountofficer" name="accountofficer" required>
<option value="{{$data['accountofficer']}}"  selected>{{$data['accountofficer']}}</option>  
@foreach( $officers as $role)
<option value="{{ $role['name']}}"> {{ $role['name']}} </option>
@endforeach
</select>
</div>
</div>



</div>



<div class="col-md-12"><br>
<div class="text-center">
<textarea rows="15" cols="135"  style="color: red ; background: white; max-width:100%;" disabled>
LOAN AGREEMENT

1.1	Balogun Gambari Microfinance Bank Ltd agrees to make available to the borrower the loan amount shown overleaf on the terms and conditions  set out in this agreement
1.2	The details of the loan are as shown on the schedule over leaf.
1.3	The loan amount shall be direct payment into borrower’s account with BALOGUN GAMBARI MICROFINANCE BANK LTD.

2.1	INTEREST
BALOGUN GAMBARI MICROFINANCE BANK LTD will charge interest on the loan amount at the rate 3.5% flat per month for any amount above N100, 000.00 and 4% flat per month for any amount below N100, 000.00 and the interest rate will be fixed for the period of the loan. If the borrower fails to pay any amount which he owes. BALOGUN GAMBARI MICROFINANCE BANK LTD in term of this agreement on the due date of such repayment she all be entitled to charge interest on the amount the borrower has not paid as the same rate as sold in the cases.
2.2	BALOGUN GAMBARI MICROFINANCE BANK LTD will calculate interest on the daily balance outstanding (after adjustment is made on cheque in the course of the course collection.)
2.3	Borrower will be require to pay BALOGUN GAMBARI MICROFINANCE BANK LTD in case of skipped or omitted deduction (s) when contacted or informed 
2.4	Penal charges will be applied on preliquidated loan: 1 to 2 months 10%, 2 to 5 months 7.5%, and 6months and above 6% plus the accrued interest for the period irrespective of the loan tenure.
e. BALOGUN GAMBARI MICROFINANCE BANK LTD shall compound interest on the loan at such interval as it shall solely in it discretion determine. 
f. Where the obligor fails to pay BALOGUN GAMBARI MICROFINANCE BANK a repayment instalment by the due date. BALOGUN GAMBARI MICROFINANCE BANK LTD will charge an additional default interest rate 1% per day on the unpaid sum.
g. BALOGUN GAMBARI MICROFINANCE BANK LTD will apply default interest rate from the date on which the obligor was due to pay the sum. The default interest Rate.
i. Is charged by BALOGUN GAMBARI MICROFINANCE BANK LTD in addition to the normal interest rate which it charge the obligor at the same time and in the same manner as that normal interest.
ii. Accrued before and after any count judgement, BALOGUN GAMBARI MICROFINANCE BANK LTD shall obtain it against the obligor and liquidated damages to compensate BALOGUN GAMBARI MICROFINANCE LTD for the additional risk other administrative cost and expenses associated with the obligor failure to pay the outstanding sum. 

3.1 The borrower must repay the loan as shown over leaf.
3.2 The borrower agrees that BALOGUN GAMBARI MICROFINANCE BANK LTD shall have the right to deduct the monthly instalments in full as set out in the overleaf directly from the borrower salary as deduction from his or her employer payroll/Domiciled salary.
3.3 Monthly repayments is deemed to have been paid upon BALOGUN GAMBARI MICROFINANCE BANK LTD receipt of remittance from borrower or the borrower’s employer.
3.4 In the event that the borrower or borrower’s employer fails to remit monthly repayment, borrower shall be expected to pay monthly instalment directly to BALOGUN GAMBARI MICROFINANCE BANK LTD
3.5 The borrower hereby gives BALOGUN GAMBARI MICROFINANCE BANK LTD the right to deduct monies owing to it from any unpaid wages or any other remuneration credits payable to the borrower if the borrower leaves the service of his/her employer for any reason before the total amount repayable under this agreement has been paid.
3.6 BALOGUN GAMBARI MICROFINANCE BANK LTD can use the money paid by borrower to pay first legal and other cost, the interest and then the actual loan amount.
3.7 Penal charges may be applied on preliquidated loan : 1 – 2 months 10%, 2 – 5 months 7.5%, 6 months and above, 6% plus the accrued interest for the period irrespective of the loan tenor.
3.8 In the event of the borrowers died or permanent disability, the borrower will be liable for repayment of any outstanding amount/tenor. His/ Her terminal benefit/ gratuity or any other disclosed or undisclosed entitlement from his employer.

Cost of Charges
The borrower agree if BALOGUN GAMBARI MICROFINANCE BANK LTD has a use Lawyer, Debt Recovery Agent and /or other consultant because the borrower has not carried out any part of this agreement the borrower will pay to BALOGUN GAMBARI MICROFINANCE BANK LTD all the cost incurred by BALOGUN GAMBARI MICROFINANCE BANK LTD 

Breach:
5.1 In the event of any failure by the borrower to pay any amount which is owing of this agreement in full  and on the date he or she has to, or any other breach by the borrower of the term of this agreement; then the full balance due under this agreement, together with any penalty interest and all other charges and expenses owing to BALOGUN GAMBARI MICROFINANCE BANK LTD by the borrower shal become immediately due and payable to BALOGUN GAMBARI MICROFINANCE BANK LTD who shall be entitled to terminate this agreement and claim and /or recover from the borrower any damages/losses it may have suffered as consequence.
5.2 Penalty interest charged shall not exceed the maximum allowable rate in term of the notice overdue amount in case of the default by the borrower or his/her employer.
5.3 The amount owing by the borrower to the BALOGUN GAMBARI MICROFINANCE BANK LTD at any time may be shown by a certificate in which BALOGUN GAMBARI MICROFINANCE BANK LTD officer has worked out and stated that amount owing. An officer from BALOGUN GAMBARI MICROFINANCE BANK LTD must sign the certificate. The certificate will be proof the amount owing to BALOGUN GAMBARI MICROFINANCE BANK LTD by the borrower and will be used in any legal proceedings and will be accepted by the court on its own as corrected unless the borrower proves that it’s wrong.

Other Obligation:
I hereby declare that I do not have pending loan obligation to any financial institution; and undertake that, under no condition shall I obtain any payroll deduction deductible loan without the written consent of BALOGUN GAMBARI MICROFINANCE BANK LTD for the duration of this loan.

General
6.1 This agreement is the whole agreement between BALOGUN GAMBARI MICROFINANCE BANK LTD and the borrower. It cannot changed unless the change is put into written and signed by both BALOGUN GAMBARI MICROFINANCE BANK LTD and the borrower.
6.2 The borrower agrees that for the period of this agreement, he or she will not close his or her specified account.
6.3 BALOGUN GAMBARI MICROFINANCE BANK LTD will give to any borrower requesting a statement setting out all deductions from his/her salary, the outstanding balance and any amount payable in arrears.
6.4 The borrower authorizes BALOGUN GAMBARI MICROFINANCE BANK LTD to access any information available to his/ her application, and also gives BALOGUN GAMBARI MICROFINANCE BANK LTD permission to register details of the conduct of the borrower’s account with any credit bureau and the borrower waives any claims he or she may have against BALOGUN GAMBARI MICROFINANCE BANK LTD in respect of such disclosure.
6.5 Disbursement is subject to the availability of fund as well as CBN regulations.

7.0 GOVERNING LAW
a. This loan agreement is governed by Nigeria law and court or the federal republic of Nigeria have jurisdiction in any matter arising from it.
If the above terms and conditions are acceptable to you. Kindly give your acceptance by signing this letter and return the same to us.


RIGHT OF SET OFF 
"By signing this offer letter/loan agreement, and by drawing on the loan, I /We covenant to repay the loan as at when due. In the event that  I/ We fail to repay the loan as agreed, and the loan becomes delinquent, the bank shall have the right to report the delinquent loan to the CBN through the Credit Risk Management System (CRMS) or by any other means and request the CBN to exercise its regulatory powers to direct all banks and other financial institutions under its regulatory purview to set-off my/our indebtedness to you from any in any bank account and from any financial assets that may be holding to my/our benefit"
"I/ We covenant and warrant that the bank shall have the power to set-off my/our indebtedness under this loan agreement from all such monies and funds standing to my/our  credit/benefit in any or all such accounts or from any other financial assets belonging to me/us and in the custody of any bank."
f"I/We hereby waive any right of confidentiality whether arising under common law or statute or in any manner whatsoever and irrevocably agree that I shall not argue to the contrary before any court of law, tribunal or any administrative authority or anybody acting in judicial or quasi-judicial capacity"

ACCELERATION OF PAYMENT IN EVENT OF DEFAULT
Without prejudice to Balogun Gambari Microfinance Bank’s right to enforce a “Bullet Repayment” of outstanding loan amount at any time, any or of the following events shall cause the Bank to accelerate repayment as due for immediate liquidation:
-    The bank reserves the right to recall if it is found to be diverted for other purposes other than the purpose for which the facility was granted
-    If the Borrower defaults in the performance or observance of any other term,condition or covenant contained in this offer letter and such breach or default continues remedied after (7) days’ notice to the borrower by the Bank.
-    If an order is issued or an effective resolution is passed or a winding-up petition is levied upon the Borrower.
-    If the borrower ceases or threatens to cease to carry on its business.
-    If there is any material change in the character of the Borrower which the Bank considers significantly adverse to its interest as a lender.

PENALTY                                                
-    The Borrower shall upon maturity of the loan or on demand by the bank, repay any outstanding in full, failure of which the borrower will be liable to pay 1% daily penalty in addition to the monthly interest rate or in accordance with the bank`s penalty rate at the time of default.
-    Penal charges of 3.5% on outstanding balance will be applied on Preliquidation of loan plus the accrued interest for the period irrespective of the loan tenor.

RECOVERY/SECURITY REALIZATION:
-    The bank shall immediately, upon the expiration of the loan tenure or upon demand commence recovery actions and enforce all legal remedies against the borrower.
-    All costs, charges or expenses incurred by the Bank, directly or indirectly in the process of recovering or attempting to recover the outstanding amount or in the process of perfecting, discharging and/or enforcing any pledged securities for this facility shall be borne by the borrower. The Bank will advise the Borrower of such charges, costs or expenses for immediate settlement.

</textarea>

</div>
<br><br>
<div class="form-group">


<label> <input type="checkbox" id="agree" name="agree" value="1" required> I confirm that I have read and understood Balogun Gambari Microfinance Bank Limited ("the Bank” or “BGMFB”) Terms and Conditions Governing the Operations of Loan Account and agree to abide and be bound by these terms and conditions.

I agree that BGMFB may vary, alter and amend any terms and conditions in its sole discretion. Copies of all terms and conditions mentioned above are available at our office or at www.regentmfb.com

I understand that my submission of this application and acceptance of this application by RBalogun Gambari Microfinance Bank Limited shall in no way be construed as approval of my application and that the Bank reserves the right not to approve this application without giving any reasons whatsoever.

Please note that by completing the account details, you have given confirmation for your loan sum (net of charges) should be transferred to that salary account or to pay you in person. Kindly note that such fund transfer would be matched against your Name and BVN.</label>



<div class="text-center">
<br><br><br><br>
<a class="btn btn-lg btn-warning " href="javascript:history.back()" ><i class=""></i><b>Back</b></a>
<button type="submit" class="btn btn-lg btn-success">
{{ __('Submit') }}
</button>

</div><br><br><br>
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
