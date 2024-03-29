<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BGMFB</title>


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

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="https://www.balogungambarimfb.com/">BGMFB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item w3-text-red w3-margin-right">{{session('messagex')}}</li> 
         <li class="nav-item w3-text-red">{{session('message')}}</li>
          
        @if (Route::has('login'))
         @auth
         <li class="nav-item"><a class="nav-link" href="/home">Dashboard</a></li>      



         <li class="nav-item"><a class="nav-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Log Out</a></li>

         <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
         </form>
         
          @else
      
          <li class="nav-item">
            <a class="nav-link" href="/login">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/employerselection">Quick Loan</a>
          </li>
             @endauth
             @endif
        </ul>
      </div>
    </div>
  </nav>



<div>
    @yield('content')
</div>





  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
 <p class="m-0 text-center text-white small">Copyright &copy; QUICK LOAN FORM - BGMFB IT - 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
