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
                                <th>No</th>
                                <th>Nama</th>
                                {{-- <th>Paket 1</th>
                                <th>Jumlah</th>
                                <th>Paket 2</th>
                                <th>Jumlah</th> --}}
                                <th>Waktu</th>
                                <th>Catatan</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            
                            <!-- <tbody>
                                <?php $no=0 ;?>
                                @foreach($proses as $row)
                                <?php $no++ ;?>
                                <tr>
                                  <td>{{$no}}</td>
                                  <td>{{$row->member->name}}</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>{{$row->tgl_order}}</td>
                                  <td>{{$row->catatan}}</td>
                                  <td></td>
                                  <td>
                                    <a href="" class="btn btn-success"><i class="fa fa-check"></i></a>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody> -->
                            
                          </table>
                        </div>
                      </div>
                    </div>
          </div>
@endsection