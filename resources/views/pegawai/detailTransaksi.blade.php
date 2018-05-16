@extends ('layout.pegawai')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">

<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Detail Transaksi</a>
            </li>
          </ol>

          @include('include.pesan')

            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-eye"></i> Detail Transaksi
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <form action="/transaksi/{{$get->id}}" method="POST" role="form" class="contactForm">
                      {{csrf_field()}}
                      {{method_field('GET')}}
                      <div class="row">
                        <div class="form-group col-md-2">
                          <label> ID :</label>
                            <input type="text" name="id" class="form-control" id="id" value="{{$get->id}}"  readonly>
                          <div class="validation"></div>
                        </div>

                        <div class="form-group col-md-5">
                          <label> Admin :</label>
                            <input type="text" name="admin" class="form-control col-md-10" id="admin" value="{{$get->admin->name}}" readonly>
                          <div class="validation"></div>
                        </div>
                      </div>
                      

                      <div class="form-group">
                        <label> Name :</label>
                          <input type="text" name="name" class="form-control col-md-6" id="name" value="{{$get->member->name}}" readonly>
                        <div class="validation"></div>
                      </div>
  
                    <div class="form-group">
                        <label> Alamat :</label>
                          <textarea name="alamat" id="alamat" class="form-control col-md-6" readonly>{{$get->member->alamat}}</textarea>
                    </div>
  
                    <div class="form-group">
                      <label> Telp :</label>
                        <input type="text" name="telp" class="form-control col-md-6" id="telp" value="{{$get->member->telp}}" readonly>
                      <div class="validation"></div>
                    </div>

                    <div class="form-group">
                        <label> Catatan :</label>
                          <textarea name="catatan" id="catatan" rows="4" class="form-control col-md-6" readonly>{{$get->catatan}}</textarea>
                    </div>
                    </form>
                    <div class="card mb-3">
                    <div class="form-group" style="margin-top:15px">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                              <th width="20px">No</th>
                              <th>Paket</th>
                              <th>Jumlah</th>
                              <th>Total</th>
                              <th width="30px">Status</th>
                              <th width="70px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php($no = 0)
                          @foreach($table as $row)
                          @php($no++)
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$row->paket->nama_paket}}</td>
                                <td>{{$row->jumlah}}</td>
                                <td>{{$row->total_bayar}}</td>
                                @if($row->status_order == 'order')
                                    <td><span class="badge badge-warning col-md-12">{{$row->status_order}}</span></td>
                                @elseif($row->status_order == 'proses')
                                    <td><span class="badge badge-primary col-md-12">{{$row->status_order}}</span></td>
                                @elseif($row->status_order == 'batal')
                                    <td><span class="badge badge-danger col-md-12">{{$row->status_order}}</span></td>
                                @else
                                    <td><span class="badge badge-success col-md-12">{{$row->status_order}}</span></td>
                                @endif
                                <td>
                                @if($row->status_order == 'proses')
                                    @if($row->transaksi->status_bayar != 'lunas')
                                    <form action="/proses/{{$row->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('PUT')}}
                                      <button type="submit" class="btn btn-success" title="Selesai"><i class="fa fa-check"></i></button>
                                      <button type="button" data-toggle="modal" data-target="#deleteModal_{{$row->id}}" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>
                                    </form>
                                    @else
                                    <form action="/proses/{{$row->id}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('PUT')}}
                                      <button type="submit" class="btn btn-success col-md-12" title="Selesai"><i class="fa fa-check"></i></button>
                                    </form>
                                    @endif
                                    
                                @elseif($row->status_order == 'selesai')
                                  <button class="btn btn-success col-md-12" type="submit" title="Diambil" data-toggle="modal" data-target="#diambilModal_{{$row->id}}"><i class="fa fa-handshake-o"></i></button>
                                @endif

                                <!-- Delete Modal-->
                                <div class="modal fade" id="deleteModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header" style="background-color:#FDFC47; color:#000">
                                          <h5 class="modal-title" id="deleteModalLabel">Hapus Transaksi</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">Apakah Anda Ingin Menghapus Transaksi?</div>
                                        <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                          <form action="/detailTransaksi/{{$row->id}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                          </form>
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>


                                <!-- DiambilModal-->
                                <div class="modal fade" id="diambilModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color:#56ab2f; color:#fff">
                                        <h5 class="modal-title" id="deleteModalLabel">Transaksi Diambil</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      @if($row->transaksi->status_bayar == 'lunas')
                                      <div class="modal-body">Transaksi Ingin Diambil ?</div>
                                      <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <form action="/selesai/{{$row->id}}" method="POST">
                                          {{csrf_field()}}
                                          {{method_field('PUT')}}
                                            <button type="submit" class="btn btn-success col-md-12">Yes</button>
                                        </form>
                                        
                                      </div>
                                      @elseif($row->transaksi->status_bayar == 'belum bayar')
                                        <div class="modal-body">Silahkan Melakukan Pembayaran Terlebih Dahulu</div>
                                        <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                          
                                        </div>
                                      @endif
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
                    <div>
                      @if($get->status_bayar == 'belum bayar')
                      <div class="form-group" style="margin-top:20px">
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#bayarModal">Bayar</button>
                      </div>
                      @else
                      <div class="form-group" style="margin-top:20px">
                        <button type="button" class="btn btn-success btn-block">Lunas</button>
                      </div>
                      @endif
                    </div>
                      

                      <!--Bayar Modal-->
                      <div class="modal fade" id="bayarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header"  style="background-color:#56ab2f; color:#fff">
                                <h5 class="modal-title" id="bayarModalLabel">Bayar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <form action="/detailTransaksi/{{$row->transaksi->id}}" method="POST" >
                                  {{csrf_field()}}
                                  {{method_field('PUT')}}
                                  <div class="form-group">
                                    <label>Total Bayar</label>
                                    <input type="text" name="total" id="total" tabindex="1" class="form-control" value="{{$bayar}}" onkeyup="sum();" readonly>
                                  </div>
                          
                                  <div class="form-group">
                                    <label >Uang</label>
                                    <input type="text" name="bayar" id="bayar" tabindex="1" class="form-control" onkeyup="sum();" required>
                                  </div>

                                  <div class="form-group">
                                      <label>Kembalian</label>
                                      <input type="text" name="kembalian" id="kembalian" tabindex="1" class="form-control" readonly>
                                    </div>
                          
                                  <div class="form-group float-right">
                                      <div class="row">
                                          <div class="col-sm-3 col-sm-offset-12">
                                              <button type="submit" class="btn btn-primary">Bayar</button>
                                          </div>
                                      </div>
                                  </div>

                                  <script>
                                    function sum() {
                                          var total = document.getElementById('total').value;
                                          var bayar = document.getElementById('bayar').value;
                                          var result = parseInt(bayar) - parseInt(total);
                                          if (!isNaN(result)) {
                                            document.getElementById('kembalian').value = result;
                                          }
                                    }
                                  </script>
                              </form>
                            </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>

            </div> 
        </div>
</div>
@endsection