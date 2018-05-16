<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/img/laundry.png">
  <title>Manager</title>
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="/manager" style="padding-bottom:0%"><img src="/img/head.png" width="200px"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip"  title="Home">
          <a class="nav-link" href="/manager">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" title="Transaksi">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-balance-scale"></i>
            <span class="nav-link-text">Report Transaksi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="/pendapatan">Pendapatan</a>
            </li>
            <li>
              <a href="/pengeluaran">Pengeluaran</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" title="Member">
          <a class="nav-link" href="/memberM">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">Data Member</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" title="Pegawai">
          <a class="nav-link" href="/pegawaiM">
            <i class="fa fa-fw fa-address-card-o"></i>
            <span class="nav-link-text">Data Pegawai</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-envelope"></i>
                <span class="d-lg-none">Messages
                  <span class="badge badge-pill badge-primary">12 New</span>
                </span>
                @if($message->count('id') > 0)
                <span class="indicator text-primary d-none d-lg-block">
                  <span class="badge bg-primary" style="color:#fff">{{$message->count('id')}}</span>
                </span>
                @endif
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown" style="width:350px;">
                <h6 class="dropdown-header">New Messages: {{$message->count('id')}}</h6>
                  <div style="overflow-x: auto; background:transparent; max-height:200px; ">
                    @if($message->count('id') > 0)
                        @foreach($message as $row)
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" style="height:50px; ">
                          <strong>{{$row->email}}</strong>
                          <span class="small float-right text-muted">{{$row->created_at}}</span>
                          <div class="dropdown-message small">{{$row->message}}</div>
                        </a>
                        @endforeach
                      @endif
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item small" href="/manager">View all Message <i class="fa fa-angle-right"></i></a>
              </div>
            </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
          <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="/profileManager" >
                <i class="fa fa-user"></i>  Profile</a>

            <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>
  </nav>

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

    <!-- Content -->
    @yield('content')

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
          <div class="text-center">
            <small><i class="fa fa-copyright"></i> Jimbaran Laundry 2018</small>
          </div>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log Out Make You Leave This Page</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Do You Want To Log Out ?</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/user">Logout</a>
              </div>
            </div>
          </div>
        </div>
  <!-- Bootstrap core JavaScript-->
  <script src="jquery/jquery.min.js"></script>
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
  <script src="js/bootstrap.bundle.min.js"></script>
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
  
  <!-- Script Extends-->
  @yield('script')
</body>

</html>
