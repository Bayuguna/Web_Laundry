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

</head>
<body>

    <div class="container" style="opacity:0.93">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info" style="margin-top:20px">
                        <div class="panel-heading" style="letter-spacing: 1px">
                            <div class="panel-title">
                            <a href="/profile" title="Home"><i class="fa fa-arrow-left"></i> Back</a> 
                            </div>
                        </div>
                <ul class="nav nav-pills nav-stacked admin-menu" style="margin:5px; text-color:black">

                    <div class="form-group">
                        <label for="">Waktu</label>
                        <input type="text" name="waktu" id="waktu" class="form-control" value="{{$data->tgl_order}}">
                    </div>

                    <div class="form-group">
                            <label for="">Admin</label>
                            <input type="text" name="waktu" id="waktu" class="form-control" value="{{$data->admin->name}}">
                        </div>                  
                </ul>
                </div>
            </div>
            <div class="col-md-9  admin-content" id="det_transaksi">
                <div class="panel panel-primary" style="background: azure;margin-top:20px">
                        <div class="panel-heading">
                            <div class="panel-title">Detail Transaksi</div>
                        </div> 
                        <div class="panel panel-info" style="margin: 1em;">
                            <div class="card mb-3" style="margin-top:15px; margin-bottom:10px">
                                    <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Paket</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php(
                                            $no = 0
                                            )
                                            @foreach($table as $row)
                                            @php(
                                            $no++
                                            )
                                            <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$row->paket->nama_paket}}</td>
                                            <td>{{$row->total_bayar}}</td>
                                            @if($row->status_order == 'proses')
                                            <td><span class="label label-primary col-md-12">{{$row->status_order}}</span></td>
                                            @else
                                            <td><span class="label label-success col-md-12">{{$row->status_order}}</span></td>
                                            @endif
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        
                                        </table>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        </div>

                    </div>
        </div>
    </div>

    <!-- Page level plugin JavaScript-->
    <script src="/chart.js/Chart.min.js"></script>
    <script src="/datatables/jquery.dataTables.js"></script>
    <script src="/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this page-->
    <script src="/js/sb-admin-datatables.min.js"></script>
    <script src="/js/sb-admin-charts.min.js"></script>
</body>
</html>
