@extends ('layout.transaksi')

@section('tables')

      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-refresh"></i> Proses</div>
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <thead>
                              <tr>
                                <th width="20px">No</th>
                                <th>Nama</th>
                                <th>Admin</th>
                                <th>Paket</th>
                                <th width="20px">Jumlah</th>
                                <th>Waktu</th>
                                <th>Catatan</th>
                                <th width="50px">Total</th>
                                <th width="30px">Action</th>
                              </tr>
                            </thead>
                            
                            <tbody>
                              <?php $no=0 ;?>
                              @foreach($proses as $row)
                              <?php $no++ ;?>
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$row->transaksi->member->name}}</td>
                                <td></td>
                                <td>{{$row->paket->nama_paket}}</td>
                                <td>{{($row->jumlah)}}</td>
                                <td>{{$row->tgl_proses}}</td>
                                <td>{{$row->catatan}}</td>
                                <td>{{($row->paket->harga)*($row->jumlah)}}</td>
                                <td width="50px">
                                  <form action="/proses/{{$row->id}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <button type="submit" class="btn btn-success col-md-12" title="Selesai"><i class="fa fa-check"></i></button>
                                  </form>
                                </td>
                              
                              </tr>
                              @endforeach
                            </tbody>
                            
                          </table>
                        </div>
                      </div>
                    </div>
          </div>
@endsection