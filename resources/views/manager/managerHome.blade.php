@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Home</a>
            </li>
          </ol>
<!-- Icon Cards-->
              <div class="row">

                <div class="col-xl-4 col-sm-4 mb-4">
                    <div class="card text-white bg-success o-hidden h-100">
                      <div class="card-body">
                        <div class="card-body-icon">
                          <i class="fa fa-fw fa-balance-scale"></i>
                        </div>
                        <div class="mr-5">Data Transaksi</div>
                      </div>
                      <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#transaksi">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                          <i class="fa fa-angle-right"></i>
                        </span>
                      </a>
                    </div>
                  </div>  

                <div class="col-xl-4 col-sm-4 mb-4">
                  <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-address-card"></i>
                      </div>
                      <div class="mr-5">Data Member</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                      <span class="float-left">View Details</span>
                      <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
          
                <div class="col-xl-4 col-sm-4 mb-4">
                  <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-address-card-o"></i>
                      </div>
                      <div class="mr-5">Data Pegawai</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#paket.php">
                      <span class="float-left">View Details</span>
                      <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>

    <!-- Email -->
              <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-envelope"></i> Email</div>
                  <div class="list-group list-group-flush small">
                   
                    <a class="list-group-item list-group-item-action" href="#">Go To Email</a>
                  </div>
                </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="transaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Transaksi</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Wich Transaksi Do You Want?</div>
          <div class="modal-footer">
            <a class="btn btn-success btn-block" href="#">Pendapatan</a>
            <a class="btn btn-success btn-block" href="#">Pengeluaran</a>
          </div>
        </div>
      </div>
    </div>
@endsection