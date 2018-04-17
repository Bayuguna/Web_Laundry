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
                <i class="fa fa-group"> Pegawai</i>
                <a href="/tambah" class=" btn-default"><i class="fa fa-plus"></i></a>
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
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=0 ;?>
                      @foreach($pegawai as $row)
                      <?php $no++ ;?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->telp}}</td>
                        <td>{{$row->alamat}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->role}}</td>
                        <td><a href="#" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a></i></td>
                      </tr>
                      @endforeach
                    </tbody>
                    
                  </table>
                </div>
              </div>
            </div>
@endsection