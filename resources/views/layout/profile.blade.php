<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/laundry.png">
    <title>Profile</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="/js/profile.js"></script>

    <!-- Libraries CSS Files -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/animate/animate.min.css" rel="stylesheet">
    <!-- dataTables style -->
    <link href="/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="css/loading.css">

</head>
<body>

    @include('include.loading')

    <div class="container" style="opacity:0.93;">
            @include('include.pesan')
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info" style="margin-top:20px">
                        <div class="panel-heading" style="letter-spacing: 1px">
                            <div class="panel-title">
                                    <a href="/user"><img src="/img/head2.png" width="220px"></img></a>
                            </div>
                        </div>
                <ul class="nav nav-pills nav-stacked admin-menu" style="margin:5px; color:#000">
                    
                        <li class="active"><a href="" data-target-id="profile"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="" data-target-id="change-password"><i class="fa fa-lock"></i> Change Password</a></li>
                        <li><a href="" data-target-id="transaksi"><i class="fa fa-book"></i> Riwayat Transaksi</a></li>
                        <li><a href="" data-target-id="logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                    
                </ul>
                </div>
            </div>
            @yield('content')
    </div>
    </div>

    <!-- Page level plugin JavaScript-->
    <script src="/chart.js/Chart.min.js"></script>
    <script src="/datatables/jquery.dataTables.js"></script>
    <script src="/datatables/dataTables.bootstrap4.js"></script>
    
    <!-- Custom scripts for this page-->
    <script src="/js/sb-admin-datatables.min.js"></script>
    <script src="/js/sb-admin-charts.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".preloader").fadeOut(1000);
        })
    </script>
    <script src="js/main.js"></script>
</body>
</html>
