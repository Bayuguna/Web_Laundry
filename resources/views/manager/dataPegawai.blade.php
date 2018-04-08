@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Data Pegawai</a>
            </li>
        </ol>

            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-group">Pegawai</i>
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
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Edit</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
@endsection