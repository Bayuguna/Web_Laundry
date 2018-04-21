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
                        <th>Waktu</th>
                        <th>Catatan</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php $no = 0;?>
                      @foreach($trans as $row)
                    <?php $no++ ;?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->member->name}}</td>
                        <td>{{$row->member->telp}}</td>
                        <td>{{$row->member->alamat}}</td>
                        <td>{{$row->tgl_order}}</td>
                        <td>{{$row->catatan}}</td>
                        <td>
                          {{-- <a href="/deleteTransaksi/{{$row->id}}" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></a> --}}
                          <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal_{{$row->id}}" title="Delete"><i class="fa fa-trash"></i></button>
                        
                          <!-- Delete Modal-->
                          <div class="modal fade" id="deleteModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#FDFC47; color:#000">
                                  <h5 class="modal-title" id="deleteModalLabel">Delete Transaksi</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body">Do You Want To Delete?</div>
                                <div class="modal-footer">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                  <a class="btn btn-danger" href="/deleteTransaksi/{{$row->id}}">Delete</a>
                                </div>
                              </div>
                            </div>
                        </div>

                        </td>

                      </tr>
                      @endforeach
                    </tbody>

                  </table>
                </div>
              </div>
            </div>
        </div>
</div>

@endsection