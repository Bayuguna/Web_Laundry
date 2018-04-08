@extends ('layout.admin')

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
                          <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">Transaksi</div>
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
                  <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                      <div class="card-body-icon">
                        <i class="fa fa-fw fa-list-alt"></i>
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
                        <i class="fa fa-fw fa-gift"></i>
                      </div>
                      <div class="mr-5">Service</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="paket.php">
                      <span class="float-left">View Details</span>
                      <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
                  </div>
                </div>
              </div>

            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i>Order
                    <a href="#">
                      <span class="float-right">Go To
                        <i class="fa fa-angle-right"></i>
                      </span>
                    </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                        <th>Paket</th>
                        <th>Layanan</th>
                        <th>Waktu</th>
                        <th>Catatan</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                        <th>Paket</th>
                        <th>Layanan</th>
                        <th>Waktu</th>
                        <th>Catatan</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
@endsection