<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/img/laundry.png">
  <title>Jimbaran Laundry</title>
  
  <!-- Bootstrap CSS File -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <!-- dataTables style -->
  <link href="datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="css/loading.css">



</head>

<body>
    @include('include.loading')

        <header id="header">
          <div class="container">

            <div id="logo" class="pull-left">
              <a href="#home"><img src="/img/head.png" alt="" title="" /></img></a>
              {{-- <h1><a href="#home">Jimbaran Laundry</a></h1> --}}
            </div>

            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="#home">Home</a></li>
              @guest
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
              @else
                <li ><a href="#order">Order</a></li>
                @if($table->count('id') > 0)
                  <li><a href="#riwayat">Transaksi</a></li>
                @endif
                <li><a href="#kebijakan">Kebijakan</a></li>
              @endguest
                <li><a href="#contact">Contact</a></li>
                  <!-- Authentication Links -->
                  @guest
                <li><a href="{{ route('login') }}">Sign In</a></li>
                  @else
                      <li class="dropdown">
                          <a href="/profile" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                              <span class="caret"></span> {{ Auth::user()->name }}
                          </a>
                          <ul class="dropdown-menu">
                              <li>

                                  <a href="/profile" >
                                    <i class="fa fa-user"></i> Profile
                                  </a>

                                  <a data-toggle="modal" data-target="#logoutModal">
                                              <i class="fa fa-sign-out"></i> Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                                </li>

                          </ul>
                      </li>
                  @endguest
              </ul>
          </li>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header -->

              <!-- Logout Modal-->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color:#159957; color:#fff">
                        <h5 class="modal-title" id="exampleModalLabel">Log Out Make You Leave This Page</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">Do You Want To Log Out ?</div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </div>
                    </div>
                  </div>
              </div>

        @yield('content')


        <!--==========================
          Footer
        ============================-->
        <footer id="footer">
          <div class="footer-top">
            <div class="container">

            </div>
          </div>

          <div class="container">
            <div class="copyright">
            <h5><i class="fa fa-copyright"></i> Jimbaran Laundry 2018 </h5>
            </div>
          </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/jquery-migrate.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="easing/easing.min.js"></script>
  <script src="wow/wow.min.js"></script>

  <script src="waypoints/waypoints.min.js"></script>
  <script src="counterup/counterup.min.js"></script>
  <script src="superfish/hoverIntent.js"></script>
  <script src="superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="chart.js/Chart.min.js"></script>
  <script src="datatables/jquery.dataTables.js"></script>
  <script src="datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  
  <!-- Custom scripts for this page-->
  <script src="js/sb-admin-datatables.min.js"></script>
  <script src="js/sb-admin-charts.min.js"></script>

  <script>
    $(document).ready(function(){
      $(".preloader").fadeOut(2000);

      $(".tombol").on('click', function(){
      var subject = $('#subject').val();
      var message = $('#message').val();
        if(subject != '' && message != ''){
          alert('Pesan terkirim');
        }else{
          alert('Silahkan Isi Field Terlebih Dahulu');
        }
      });
    });
  </script>
  

</body>
</html>
