<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/laundry.png">
  <title>Manager</title>
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
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
    <a class="navbar-brand" href="#">MANAGER</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="home">
          <a class="nav-link" href="/manager">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-balance-scale"></i>
            <span class="nav-link-text">Data Transaksi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="#">Pendapatan</a>
            </li>
            <li>
              <a href="#">Pengeluaran</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="member">
          <a class="nav-link" href="/memberM">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">Data Member</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="member">
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
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

    <!-- Content -->
    @yield('content')

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
          <div class="container">
            <div class="text-center">
              <small>Jimbaran Laundry 2018</small>
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
</body>

</html>
