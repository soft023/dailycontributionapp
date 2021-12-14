<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

@yield('title')

</title>
<link rel="stylesheet" type="text/css" href="../../css/w3.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
<link rel="icon"  sizes="16x16" href="../companylogo/lg.jpeg">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="/home" class="nav-link">Home</a>
</li>

</ul>



<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="dropdown-item text-danger" href="{{ route('logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</li>

<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="/" class="brand-link">
<img src="../../companylogo/lg.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">BGMFB-DC</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
<!-- Sidebar user panel (optional) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">

{{--  <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
</div>
<div class="info">
<a href="/home" class="d-block">{{Auth::user()->firstname}}</a>
</div>
</div>


<!-- /.sidebar-menu -->
<!-- Sidebar Menu -->


<nav class="mt-2">

@if (Auth::user()->role == "Superadmin" || Auth::user()->role == "Md" )
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-header w3-gray">BACKEND MANAGEMENT</li>

</ul>











<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Officer Till 
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/officertill/newtill" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>New</p>
</a>
</li>
<li class="nav-item">
<a href="/officertill/alltill" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All</p>
</a>
</li>
<li class="nav-item">
<a href="/officertill/balance" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Balance</p>
</a>
</li>



</ul>
</li>

</ul>










<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Users
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/usermanagement/newuser" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>New</p>
</a>
</li>
<li class="nav-item">
<a href="/usermanagement/allusers" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All</p>
</a>
</li>



</ul>
</li>

</ul>


@endif




@if (Auth::user()->role == "Marketer")
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-header w3-gray">ACCOUNT OFFICER</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Customer Account
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/customer/balance" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Balance</p>
</a>
</li>

<li class="nav-item">
<a href="/customer/new" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>New</p>
</a>
</li>

<li class="nav-item">
<a href="/customer/mycustomers" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All</p>
</a>
</li>

<li class="nav-item">
<a href="/customer/report" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Report</p>
</a>
</li>


</ul>
</li>

</ul>















<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Posting 
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/postings/deposit" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Deposit </p>
</a>
</li>

<li class="nav-item">
<a href="/postings/withdrawal" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Withdrawal</p>
</a>
</li>

<li class="nav-item">
<a href="/postings/mytill" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>My Till</p>
</a>
</li>


</ul>
</li>


<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Report
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/postings/officerreportframe" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>My Report </p>
</a>
</li>




</ul>
</li>

</ul>
</ul>

@endif
















@if (Auth::user()->role == "Superadmin" || Auth::user()->role == "Control" || Auth::user()->role == "Operations" || Auth::user()->role == "Md")

<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-header w3-gray">ENQUIRY</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Customer Account
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/customer/balance" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Balance</p>
</a>
</li>


<li class="nav-item">
<a href="/customer/all" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All</p>
</a>
</li>

<li class="nav-item">
<a href="/customer/report" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Report</p>
</a>
</li>


</ul>
</li>

</ul>



<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-header w3-gray">Report</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Accounts
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/report/allofficer" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>All Till Report</p>
</a>
</li>

<li class="nav-item">
<a href="/report/reportbyofficer" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Report By Officer</p>
</a>
</li>


<li class="nav-item">
<a href="/report/voucher" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Bankone Voucher</p>
</a>
</li>

<li class="nav-item">
<a href="/report/bankoneupload" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Bankone Upload</p>
</a>
</li>

<li class="nav-item">
<a href="/report/alltransactions" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Call Over</p>
</a>
</li>


</ul>
</li>

</ul>






















@endif



@if (Auth::user()->role == "Operations" || Auth::user()->role == "Superadmin")
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-header w3-gray">OPERATIONS</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Transact
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/operations/creditform" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Credit Officer</p>
</a>
</li>
<li class="nav-item">
<a href="/operations/debitform" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Debit Officer</p>
</a>
</li>
<li class="nav-item">
<a href="/operations/remapform" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Account Remap</p>
</a>
</li>

</ul>
</li>

</ul>



@endif







@if (Auth::user()->role == "Control" || Auth::user()->role == "Superadmin" || Auth::user()->role == "Md")
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-header w3-gray">CONTROL SYSTEM</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Controls
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/control/issues" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Issues</p>
</a>
</li>

</ul>
</li>

</ul>

@endif








@if (Auth::user()->role == "Credit" )
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-header w3-gray">CREDIT - Loan</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/loan/pending" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pending Application</p>
</a>
</li>


<li class="nav-item">
<a href="/loan/history" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>History</p>
</a>
</li>



</ul>
</li>

</ul>

@endif

@if (Auth::user()->role == "Fincon" )
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-header w3-gray">Fincon - Loan</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/loan/pending" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pending Application</p>
</a>
</li>


<li class="nav-item">
<a href="/loan/history" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>History</p>
</a>
</li>



</ul>
</li>

</ul>




@endif








@if (Auth::user()->role == "Md" )
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-header w3-gray">MD | CEO - Loan</li>

<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/loan/pending" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pending Application</p>
</a>
</li>


<li class="nav-item">
<a href="/loan/history" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>History</p>
</a>
</li>



</ul>
</li>

</ul>




@endif









@if (Auth::user()->role == "Control" )
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-header w3-gray">Control - Loan</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/loan/pending" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pending Application</p>
</a>
</li>


<li class="nav-item">
<a href="/loan/history" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>History</p>
</a>
</li>
</ul>
</li>

</ul>

@endif









@if (Auth::user()->role == "Operations" )
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<li class="nav-header w3-gray">Operation - Loan</li>
<li class="nav-item has-treeview">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Management
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">

<li class="nav-item">
<a href="/loan/pending" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pending Application</p>
</a>
</li>


<li class="nav-item">
<a href="/loan/history" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>History</p>
</a>
</li>
</ul>
</li>

</ul>

@endif

























</nav>
<!-- /.sidebar-menu -->
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h3 class="m-0 text-dark">   @yield('title2')</h3>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div>
@yield('maincontent')
</div>

<!-- Main content -->

<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>Copyright &copy; 2021 <a href="#" class="w3-red">BGMFB-DC</a></strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
<b>Version</b>1.0/<span class="w3-purple">BGMFB IT</span>
</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
    function printReport()
    {
        var prtContent = document.getElementById("calloverPrinting");
        var printWindow = window.open('', '', '');
         printWindow.document.write('<html><head><title>Print Statement</title>');
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
</script>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
