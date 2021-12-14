<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>BG Quick Cash Loan Application Form</title>


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

<!-- 
<div class="text-right w3-margin-right">
<form>
 <input type="button" class="btn-outline-success btn-lg"  value="Print" onClick="printReportx()">
</form>
</div> -->

<div class="container">
<div id="printarea" class="printarea">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4"></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 text-center w3-card w3-red">
 <h4>BG QUICK CASH LOAN</h4>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4"></div>
</div>
@foreach($details as $data)
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4 text-right">
  <img src="../../companylogo/lg.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" width="100px" height="100px">
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 text-center w3-text-black">
 <p><b>Balogun Gambari Microfinance Bank Ltd.</b></p>
 <p class="w3-text-black"><b>ACCOUNT OPENING | LOAN APPLICATION | LOAN AGREEMENT FORM</b></p>

</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xm-4">
<img src="../../loanpassport/{{ $data['loanpassport'] }}" alt="Passport" width="150" height="150" >
</div>
</div>



<section>

<div class="container">

<h4 class="w3-red text-center">Personal Information</h4>
<div class="row text-center	w3-card">
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left" >
<p><b>Title:</b> {{ $data['title'] }}</p> 
<p><b>BVN:</b> {{ $data['bvn'] }}</p>
<p><b>ID card Type:</b> {{ $data['idtype'] }}</p>
<p><b>DOB:</b> {{ $data['dob'] }}</p>
<p><b>NOK Name:</b> {{ $data['nokname'] }}</p>
<p><b>NOK Phone Number:</b> {{ $data['nokphone'] }}</p>	

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Surname:</b> {{ $data['surname'] }}</p> 
<p><b>Phone Number 1:</b> {{ $data['phoneone'] }}</p>
<p><b>ID Number:</b> {{ $data['idcardno'] }}</p>
<p><b>Number of Children :</b> {{ $data['noofchildren'] }}</p>
<p><b>Email:</b> {{ $data['email'] }}</p>	
<p><b>NOK Relationship</b> {{ $data['nokrelationship'] }}</p>	
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Firstname:</b> {{ $data['firstname'] }}</p>
<p><b>Phone Number 2:</b> {{ $data['phonetwo'] }}</p>
<p><b>Issuance Date:</b> {{ $data['idissuedate'] }}</p>
<p><b>Nationality:</b> {{ $data['nationality'] }}</p>
<p><b>L.G.A:</b> {{ $data['lga'] }}</p>	
<p><b>NOK Address</b> {{ $data['nokaddress'] }}</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Othername:</b> {{ $data['othername'] }}</p>
<p><b>Marital Status:</b> {{ $data['maritalstatus'] }}</p>
<p><b>Expiry Date:</b> {{ $data['idexpirydate'] }}</p>
<p><b>State of Origin:</b> {{ $data['stateoforigin'] }}</p>
<p><b>Account Officer:</b> {{ $data['accountofficer'] }}</p> 
<p><b>Address:</b> {{ $data['homeaddress'] }}</p>	
</div>
</div>



<h4 class="w3-red text-center">Loan Details</h4>
<div class="row text-center	w3-card">
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left" >
<p><b>Type:</b> {{ $data['loantype'] }}</p> 
<p><b>Loan Amount:</b>N {{ $data['loanamount'] }}</p> 
<p><b>Purpose:</b> {{ $data['loanpurpose'] }}</p> 
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Tenure:</b> {{ $data['tenure'] }}</p>
<p><b>Salary A/C:</b> {{ $data['salaryacount'] }}</p> 


</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Net:N</b> {{ $data['net'] }}</p> 
<p><b>Bank:</b> {{ $data['bankname'] }}</p>

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Installment:</b>N {{ number_format((float)(( str_replace(',', '',$data['loanamount']) / $data['tenure'] ) + (3.5/100 * str_replace(',', '',$data['loanamount'])) ),2,'.','')}}</p> 
<p><b>Amount in word:</b> {{ $data['amountinword'] }}</p>		
</div>
</div>







<h4 class="w3-red text-center">Employer's Information( {{ $data['category'] }})</h4>
<div class="row text-center	w3-card">
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left" >
<p><b>DOE:</b> {{ $data['doe'] }}</p> 
<p><b>Staff ID No:</b> {{ $data['staffidno'] }}</p> 

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>MDA:</b> {{ $data['mda'] }}</p>
<p><b>IPPIS | Biometric:</b> {{ $data['biometricno'] }}</p>

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Department:</b> {{ $data['nokphone'] }}</p> 
<p><b>Email:</b> {{ $data['officeemail'] }}</p> 

</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xm-3 text-left">
<p><b>Grade Level:</b> {{ $data['gradelevel'] }}</p>
<p><b>Address:</b> {{ $data['officeaddress'] }}</p>
</div>
</div>









<br>
<div class="row"><br><br>
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
<p>LOAN AGREEMENT</p>
<textarea rows="15" cols="240" style="color: red; font-size: 8.5px;  border: 0px; margin: 0px" readonly>
LOAN AGREEMENT
1.1 Balogun Gambari Microfinance Bank Ltd agrees to make available to the borrower the loan amount shown overleaf on the terms and conditions  set out in this agreement
1.2 The details of the loan are as shown on the schedule over leaf.
1.3 The loan amount shall be direct payment into borrower’s account with BALOGUN GAMBARI MICROFINANCE BANK LTD.
2.1 INTEREST
BALOGUN GAMBARI MICROFINANCE BANK LTD will charge interest on the loan amount at the rate 3.5% flat per month for any amount above N100, 000.00 and 4% flat per month for any amount below N100, 000.00 and the interest rate will be fixed for the period of the loan. If the borrower fails to pay any amount which he owes. BALOGUN GAMBARI MICROFINANCE BANK LTD in term of this agreement on the due date of such repayment she all be entitled to charge interest on the amount the borrower has not paid as the same rate as sold in the cases.
2.2 BALOGUN GAMBARI MICROFINANCE BANK LTD will calculate interest on the daily balance outstanding (after adjustment is made on cheque in the course of the course collection.)
2.3 Borrower will be require to pay BALOGUN GAMBARI MICROFINANCE BANK LTD in case of skipped or omitted deduction (s) when contacted or informed 
2.4 Penal charges will be applied on preliquidated loan: 1 to 2 months 10%, 2 to 5 months 7.5%, and 6months and above 6% plus the accrued interest for the period irrespective of the loan tenure.
e. BALOGUN GAMBARI MICROFINANCE BANK LTD shall compound interest on the loan at such interval as it shall solely in it discretion determine. 
f. Where the obligor fails to pay BALOGUN GAMBARI MICROFINANCE BANK a repayment instalment by the due date. BALOGUN GAMBARI MICROFINANCE BANK LTD will charge an additional default interest rate 1% per day on the unpaid sum.
g. BALOGUN GAMBARI MICROFINANCE BANK LTD will apply default interest rate from the date on which the obligor was due to pay the sum. The default interest Rate.
i. Is charged by BALOGUN GAMBARI MICROFINANCE BANK LTD in addition to the normal interest rate which it charge the obligor at the same time and in the same manner as that normal interest.
</textarea>
<textarea rows="11" cols="240" style="color: red; font-size: 8.5px; border: 0px;" readonly>
  ii. Accrued before and after any count judgement, BALOGUN GAMBARI MICROFINANCE BANK LTD shall obtain it against the obligor and liquidated damages to compensate BALOGUN GAMBARI MICROFINANCE LTD for the additional risk other administrative cost 
  and expenses associated with the obligor failure to pay the outstanding sum. 
3.1 The borrower must repay the loan as shown over leaf.
3.2 The borrower agrees that BALOGUN GAMBARI MICROFINANCE BANK LTD shall have the right to deduct the monthly instalments in full as set out in the overleaf directly from the borrower salary as deduction from his or her employer payroll/Domiciled salary.
3.3 Monthly repayments is deemed to have been paid upon BALOGUN GAMBARI MICROFINANCE BANK LTD receipt of remittance from borrower or the borrower’s employer.
3.4 In the event that the borrower or borrower’s employer fails to remit monthly repayment, borrower shall be expected to pay monthly instalment directly to BALOGUN GAMBARI MICROFINANCE BANK LTD
3.5 The borrower hereby gives BALOGUN GAMBARI MICROFINANCE BANK LTD the right to deduct monies owing to it from any unpaid wages or any other remuneration credits payable to the borrower if the borrower leaves the service of his/her employer for any reason before the total amount repayable under this agreement has been paid.
3.6 BALOGUN GAMBARI MICROFINANCE BANK LTD can use the money paid by borrower to pay first legal and other cost, the interest and then the actual loan amount.
3.7 Penal charges may be applied on preliquidated loan : 1 – 2 months 10%, 2 – 5 months 7.5%, 6 months and above, 6% plus the accrued interest for the period irrespective of the loan tenor.
3.8 In the event of the borrowers died or permanent disability, the borrower will be liable for repayment of any outstanding amount/tenor. His/ Her terminal benefit/ gratuity or any other disclosed or undisclosed entitlement from his employer.
</textarea>
<textarea rows="15" cols="240" style="color: red; font-size: 8.5px; border: 0px;" readonly>
  Cost of Charges
The borrower agree if BALOGUN GAMBARI MICROFINANCE BANK LTD has a use Lawyer, Debt Recovery Agent and /or other consultant because the borrower has not carried out any part of this agreement the borrower will pay to BALOGUN GAMBARI MICROFINANCE BANK LTD all the cost incurred by BALOGUN GAMBARI MICROFINANCE BANK LTD 
Breach:
5.1 In the event of any failure by the borrower to pay any amount which is owing of this agreement in full  and on the date he or she has to, or any other breach by the borrower of the term of this agreement; then the full balance due under this agreement, together with any penalty interest and all other charges and expenses owing to BALOGUN GAMBARI MICROFINANCE BANK LTD by the borrower shal become immediately due and payable to BALOGUN GAMBARI MICROFINANCE BANK LTD who shall be entitled to terminate this agreement and claim and /or recover from the borrower any damages/losses it may have suffered as consequence.
5.2 Penalty interest charged shall not exceed the maximum allowable rate in term of the notice overdue amount in case of the default by the borrower or his/her employer.
5.3 The amount owing by the borrower to the BALOGUN GAMBARI MICROFINANCE BANK LTD at any time may be shown by a certificate in which BALOGUN GAMBARI MICROFINANCE BANK LTD officer has worked out and stated that amount owing. An officer from BALOGUN GAMBARI MICROFINANCE BANK LTD must sign the certificate. The certificate will be proof the amount owing to BALOGUN GAMBARI MICROFINANCE BANK LTD by the borrower and will be used in any legal proceedings and will be accepted by the court on its own as corrected unless the borrower proves that it’s wrong.
Other Obligation:
I hereby declare that I do not have pending loan obligation to any financial institution; and undertake that, under no condition shall I obtain any payroll deduction deductible loan without the written consent of BALOGUN GAMBARI MICROFINANCE BANK LTD for the duration of this loan.
General
</textarea>
<textarea rows="9" cols="240" style="color: red; font-size: 8.5px; border: 0px;" readonly>
6.1 This agreement is the whole agreement between BALOGUN GAMBARI MICROFINANCE BANK LTD and the borrower. It cannot changed unless the change is put into written and signed by both BALOGUN GAMBARI MICROFINANCE BANK LTD and the borrower.
6.2 The borrower agrees that for the period of this agreement, he or she will not close his or her specified account.
6.3 BALOGUN GAMBARI MICROFINANCE BANK LTD will give to any borrower requesting a statement setting out all deductions from his/her salary, the outstanding balance and any amount payable in arrears.
6.4 The borrower authorizes BALOGUN GAMBARI MICROFINANCE BANK LTD to access any information available to his/ her application, and also gives BALOGUN GAMBARI MICROFINANCE BANK LTD permission to register details of the conduct of the borrower’s account with any credit bureau and the borrower waives any claims he or she may have against BALOGUN GAMBARI MICROFINANCE BANK LTD in respect of such disclosure.
6.5 Disbursement is subject to the availability of fund as well as CBN regulations.
7.0 GOVERNING LAW
a. This loan agreement is governed by Nigeria law and court or the federal republic of Nigeria have jurisdiction in any matter arising from it.
If the above terms and conditions are acceptable to you. Kindly give your acceptance by signing this letter and return the same to us.
</textarea>
<textarea rows="30" cols="240" style="color: red; font-size: 8.5px; border: 0px;" readonly>
RIGHT OF SET OFF 
"By signing this offer letter/loan agreement, and by drawing on the loan, I /We covenant to repay the loan as at when due. In the event that  I/ We fail to repay the loan as agreed, and the loan becomes delinquent, the bank shall have the right to report the delinquent loan to the CBN through the Credit Risk Management System (CRMS) or by any other means and request the CBN to exercise its regulatory powers to direct all banks and other financial institutions under its regulatory purview to set-off my/our indebtedness to you from any in any bank account and from any financial assets that may be holding to my/our benefit"
"I/ We covenant and warrant that the bank shall have the power to set-off my/our indebtedness under this loan agreement from all such monies and funds standing to my/our  credit/benefit in any or all such accounts or from any other financial assets belonging to me/us and in the custody of any bank."
"I/We hereby waive any right of confidentiality whether arising under common law or statute or in any manner whatsoever and irrevocably agree that I shall not argue to the contrary before any court of law, tribunal or any administrative authority or anybody acting in judicial or quasi-judicial capacity"

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

I confirm that I have read and understood Balogun Gambari Microfinance Bank Limited ("the Bank” or “BGMFB”) Terms and Conditions Governing the Operations of Loan Account and agree to abide and be bound by these terms and conditions.
I agree that BGMFB may vary, alter and amend any terms and conditions in its sole discretion. Copies of all terms and conditions mentioned above are available at our office or at www.regentmfb.com
I understand that my submission of this application and acceptance of this application by RBalogun Gambari Microfinance Bank Limited shall in no way be construed as approval of my application and that the Bank reserves the right not to approve this application without giving any reasons whatsoever.
</textarea><br><br>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 " >
<img src="../../loansignature/{{ $data['loansignature'] }}" alt="signature" width="150" height="150" >
</div>

</div>



<h4 class="w3-purple text-center">Comment</h4>
<div class="row text-center">
<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 text-left" >
<p><b>Credit Comment By :</b> {{ $data['credit'] }}</p> 
<p><b>Credit Comment:</b> {{ $data['creditcomment'] }}</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 text-left" >
<p><b>Control Comment By :</b> {{ $data['control'] }}</p> 
<p><b>Control Comment:</b> {{ $data['controlcomment'] }}</p>
</div>
</div>



<div class="row text-center ">
<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 text-left" >
<p><b>Fincon Comment By :</b> {{ $data['fincon'] }}</p> 
<p><b>Fincon Comment:</b> {{ $data['finconcomment'] }}</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6 text-left" >
<p><b>MD | CEO Comment By :</b> {{ $data['md'] }}</p> 
<p><b>MD | CEO Comment:</b> {{ $data['mdcomment'] }}</p>
</div>
</div>


<h4 class="w3-red text-center">Other Information</h4>
<div class="row text-center">

<div class="col-lg-4 col-md-4	col-sm-4 col-xm-4	" >
<img src="../../loanvalidid/{{ $data['loanvalidid'] }}" alt="Valid ID" width="250" height="250" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanvalidid/{{ $data['loanvalidid'] }}"><b>Click For Valid ID</b></a></h6>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 " >
<img src="../../loanstaffidcard/{{ $data['loanstaffidcard'] }}" alt="stafdidcard" width="250" height="250" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanstaffidcard/{{ $data['loanstaffidcard'] }}"><b>Click For Staff ID</b></a></h6>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 " >
<img src="../../loanletter/{{ $data['loanletter'] }}" alt="Employment Letter" width="250" height="250" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanletter/{{ $data['loanletter'] }}"><b>Click For Employment Letter</b></a></h6>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4 " >
<img src="../../loanpayslip/{{ $data['loanpayslip'] }}" alt="payslip" width="250" height="250" >
<h6><a class="btn btn-sm btn-outline-danger" href="../../loanpayslip/{{ $data['loanpayslip'] }}"><b>Click For Payslip</b></a></h6>
</div>


</div>


@endforeach
</section>
</div></section></div>

<br><br>










<div class="card-footer">
                    <button class="btn btn-info btn-md float-right" onclick="print()">Print</button>
                </div>


















<!-- Footer -->
<footer class="py-5 bg-black">
<div class="container">
<p class="m-0 text-center text-white small">Copyright &copy; QUICK LOAN  - BGMFB IT 2020</p>
</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- <script type="text/javascript">
    function printReportx()
    {
        var prtContent = document.getElementById("printarea");
        var printWindow = window.open('', '', '');
         printWindow.document.write('<html><head><title>Print Loan Application Form</title>');
        printWindow.document.write('<link rel="stylesheet" href="../../css/w3.css">');
         printWindow.document.write('</head><body >');
        printWindow.document.write(prtContent.outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        setTimeout(function () {
        printWindow.print();
    }, 500);
    return false;
       printWindow.focus();
        printWindow.print();

        printWindow.close();
    }
</script> -->

<script type="text/javascript">

    function addcommas(x) {
    //remove commas
    retVal = x ? parseFloat(x.replace(/,/g, '')) : 0;

    //apply formatting
    return retVal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
  </script>



<script type="text/javascript">
print(): void {
        let printContents, popupWin;
        printContents = document.getElementById('printarea').innerHTML;
        popupWin = window.open('', '_blank', 'top=0,left=0,height=100%,width=auto');
        popupWin.document.open();
        popupWin.document.write(`
          <html>
            <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            </head>
            <style>

            </style>
        <body onload="window.print();window.close()">${printContents}</body>
          </html>`
        );
        popupWin.document.close();
    }
</script>


<script> 
    function printDiv() { 
        var divContents = document.getElementById("main_div").innerHTML; 
        var a = window.open('', '', 'height=500, width=500'); 
        a.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><html>'); 
        a.document.write('<body >'); 
        a.document.write(divContents); 
        a.document.write('</body></html>'); 
        a.document.close(); 
        a.print(); 
    } 
</script> 



</body>
</html>
