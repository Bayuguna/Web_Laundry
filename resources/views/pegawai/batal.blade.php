@extends ('layout.dataTransaksi')

@section('tables')
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-times"></i> Transaksi Batal</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Telp</th>
                          <th>Alamat</th>
                          <th>Waktu Batal</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php( $no = 0)
                        @foreach($batal as $row)
                        @php( $no++)
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$row->member->name}}</td>
                          <td>{{$row->member->telp}}</td>
                          <td>{{$row->member->alamat}}</td>
                          <td>{{$row->tgl_batal}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
            </div>
@endsection