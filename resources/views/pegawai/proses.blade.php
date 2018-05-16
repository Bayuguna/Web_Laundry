@extends ('layout.transaksi')

@section('tables')

      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-refresh"></i> Proses</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th width="20px">No</th>
                          <th>Nama</th>
                          <th>Paket</th>
                          <th width="20px">Jumlah</th>
                          <th>Waktu</th>
                          <th>Catatan</th>
                          <th width="50px">Harga</th>
                          <th width="75px">Action</th>
                        </tr>
                    </thead>
                      
                      <tbody>
                        <?php $no=0 ;?>
                        @foreach($proses as $row)
                        <?php $no++ ;?>
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$row->transaksi->member->name}}</td>
                          <td>{{$row->paket->nama_paket}}</td>
                          <td>{{($row->jumlah)}}</td>
                          <td>{{$row->tgl_proses}}</td>
                          <td>{{$row->transaksi->catatan}}</td>
                          <td>{{($row->paket->harga)*($row->jumlah)}}</td>
                          <td>
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#selesaiModal_{{$row->id}}" title="Selesai"><i class="fa fa-check"></i></button>
                              <a class="btn btn-info" href="/detailTransaksi/{{$row->transaksi->id}}" title="Detail Transaksi"><i class="fa fa-eye"></i></a>
                            
                              <!-- Selesai Modal-->
                              <div class="modal fade" id="selesaiModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color:#56ab2f; color:#fff">
                                        <h5 class="modal-title" id="deleteModalLabel">Transaksi Selesai</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">Transaksi Selesai Di Proses</div>
                                      <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <form action="/proses/{{$row->id}}" method="POST">
                                          {{csrf_field()}}
                                          {{method_field('PUT')}}
                                          <button type="submit" class="btn btn-success col-md-12"> Selesai</button>
                                        </form>
                                        
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
@endsection