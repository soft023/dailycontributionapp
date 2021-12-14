@extends ('layouts.maintwo')
@section('maincontent')
 </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation" style="font-family: futura light; font-style: normal;">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                   
        </li>
        
          
                    <li><br>
                        <a class="active-menu"  href="/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a  href="/ca/allpendingrequest"><i class="fa fa-qrcode fa-3x"></i>Pending Requests</a>
                    </li>

                    <li>
                        <a  href="/ca/approvedloans"><i class="fa fa-qrcode fa-3x"></i>Approved Loans</a>
                    </li>
                             
                   
                  <li>
                        <a  href="/ca/allloan"><i class="fa fa-square-o fa-3x"></i>History</a>
                    </li> 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="font-family: futura light; font-style: normal;" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Credit Analyst</h2>   
                        <h5>Meeting Needs... </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <div class="row">
               
                   
                    <div class="col-md-6 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{session('numcons')}}</p>
                    <p class="text-muted">All Loans Request</p>
                </div>
             </div>
             </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">{{session('numback')}}</p>
                    <p class="text-muted">Pending Loan Request</p>
                </div>
             </div>
             </div>
            </div>
                 <!-- /. ROW  -->
                <hr />                
                






@endsection