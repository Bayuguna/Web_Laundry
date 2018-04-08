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
                                <th>Telp</th>
                                <th>Alamat</th>
                                <th>Berat</th>
                                <th>Item</th>
                                <th>Service</th>
                                <th>Waktu Proses</th>
                                <th>Catatan</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Selesai</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                                <th>Berat</th>
                                <th>Item</th>
                                <th>Service</th>
                                <th>Waktu Proses</th>
                                <th>Catatan</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Selesai</th>
                                <th>Delete</th>
                              </tr>
                            </tfoot>  
                          </table>
                        </div>
                      </div>
                    </div>
          </div>
@endsection