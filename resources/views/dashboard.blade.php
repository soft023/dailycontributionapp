@extends ('layouts.maindashboard')

    <!-- /.content-header -->
@section('maincontent')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
        <!-- Small boxes (Stat box) -->
 
        <div class="row">
      @if (Auth::user()->role != "Credit"  && Auth::user()->role != "Fincon" )     
          <div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
            @if (Auth::user()->role != "Marketer" )   
            <a href="/currentbalancereport" >
                @endif
            <div class="small-box bg-info">
              <div class="inner">
              
                <h3>N{{number_format($balance  ,2)  }} </h3>
                <p> Current Balance</p>
             
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
            </a>
          </div>
          
          
          
          <!-- For Credit -->
@if (Auth::user()->role != "Marketer" )   
          <div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
            
             <a href="/totaldepositreport" >
              
            <div class="small-box bg-success">
              <div class="inner">
                <h3>N{{number_format($deposit  ,2)  }}</sup></h3>

                <p>Total Deposit</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </a>
          </div>
 
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
            @if (Auth::user()->role != "Marketer" )   
             <a href="/totalwithdrawalreport" >
                 @endif
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>N{{number_format($withdrawal  ,2)  }}</h3>

                <p>Total Withdrawal</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </a>
          </div>  @endif
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
            @if (Auth::user()->role != "Marketer" )   
             <a href="/allcustomerreport" >
                 @endif
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$customers}}</h3>

                <p>Customers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </a>
          </div>
          @if (Auth::user()->role != "Marketer" )   
           <div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
             <a href="/totalpassbookreport" >
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>N{{number_format($passbook  ,2)  }}</h3>

                <p>Passbook</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </a>
          </div>
             <div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
             <a href="/totalcommissionreport" >
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>N{{number_format($commission  ,2)  }}</h3>

                <p>Commission</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </a>
          </div>
          @endif
          @endif
          <!-- ./col -->



  @if (Auth::user()->role == "Credit" || Auth::user()->role == "Fincon" || Auth::user()->role == "Md" || Auth::user()->role == "Control" || Auth::user()->role == "Operations" || Auth::user()->role == "Superadmin")
  <div class="col-lg-3 col-md-3 col-sm-12">
     <a href="/loan/history" >
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">      
                   <h3>{{$all}} </h3>
                <p>All Loan Form</p>    
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </a>
          </div>



<div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
             <a href="/loan/pending" >
            <div class="small-box bg-secondary">
              <div class="inner">      
                   <h3>{{$pending}} </h3>
                <p>Pending Application</p>    
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </a>
          </div>


@endif


 <!-- Total Cabal -->
              @if (Auth::user()->role == "Marketer" )   
          <div class="col-lg-3 col-md-3 col-sm-12">
            <!-- small box -->
         
            
             
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>N{{number_format($cabal  ,2)  }}</h3>

                <p>Total Cabal</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </a>
          </div>  @endif
          





















        </div>
       





        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
           

               
            <!-- solid sales graph -->
           
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->




  @endsection

