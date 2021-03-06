@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Data Member</a>
            </li>
        </ol>

            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-group"></i> Member
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th width="20px">No</th>
                        <th>Nama</th>
                        <th width="100px">Telp</th>
                        <th>Alamat</th>
                        <th width="220px">Email</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($member as $i => $row)
                      <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->telp}}</td>
                        <td>{{$row->alamat}}</td>
                        <td>{{$row->email}}</td>
                      </tr>
                @endforeach
                    </tbody>
                  
                  </table>
                </div>
              </div>
            </div>
@endsection