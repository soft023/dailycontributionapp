@extends ('layouts.maindashboard')

 
@section('maincontent')

<section class="content">
<marquee class="scrolldelay"> <h2>Breakdown Of all Withdrawal</h2></marquee>
<div class="container-fluid"> 
<div class="row">
@if (Auth::user()->role != "Credit"  && Auth::user()->role != "Fincon" )     
<div class="col-lg-4 col-md-4  col-sm-12">
@foreach( $userx as $user)

<div class="alert alert-warning">
<h4>{{$user['officer']}} <b>N {{number_format($user['amount']  ,2)  }}</b></h4>
</div>
@endforeach
</div>


@endif
          <!-- ./col -->

























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

