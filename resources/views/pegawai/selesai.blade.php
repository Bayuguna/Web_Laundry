@extends ('layout.transaksi')

@section('tables')

      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-check"></i> Selesai</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th width="20px">No</th>
                          <th>Nama</th>
                          <th>Telp</th>
                          <th>Alamat</th>
                          <th>Waktu</th>
                          <th>Harga</th>
                          <th width="20px">Status</th>
                          <th width="20px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=0 ;?>
                      @foreach($selesai as $row)
                      <?php $no++ ;?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->transaksi->member->name}}</td>
                        <td>{{$row->transaksi->member->telp}}</td>
                        <td>{{$row->transaksi->member->alamat}}</td>
                        <td>{{$row->tgl_selesai}}</td>
                        <td>{{$row->total_bayar}}</td>
                        @if($row->transaksi->status_bayar == 'belum bayar')
                          <td><span class="badge badge-danger col-md-12">{{$row->transaksi->status_bayar}}</span></td>
                        @elseif($row->transaksi->status_bayar == 'lunas')
                          <td ><span class="badge badge-success col-md-12">{{$row->transaksi->status_bayar}}</span></td>
                        @endif                             
                        <td>
                          <button class="btn btn-success col-md-12" type="submit" title="Diambil" data-toggle="modal" data-target="#diambilModal_{{$row->id}}"><i class="fa fa-handshake-o"></i></button>
                        
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
                                <div class="modal-footer pull-left">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                  <a href="/detailTransaksi/{{$row->transaksi->id}}" class="btn btn-info">View Details</a>
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
                                    <a href="/detailTransaksi/{{$row->transaksi->id}}" class="btn btn-success">Bayar</a>
                                    
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
          </div>
@endsection