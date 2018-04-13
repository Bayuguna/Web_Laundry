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

            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> New Order
                    <a href="/order">
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
        </div>
</div>
@endsection