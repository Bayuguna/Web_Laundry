@extends ('layout.dataTransaksi')

@section('tables')
      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-check"></i> Transaksi Diambil</div>
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
                                <th>Waktu Pengambilan</th>
                                <th>Total</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                                <th>Waktu Pengambilan</th>
                                <th>Total</th>
                              </tr>
                            </tfoot>  
                          </table>
                        </div>
                      </div>
                    </div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-times"></i> Transaksi Batal</div>
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
                                  <th>Waktu Batal</th>
                                </tr>
                              </thead>
                              <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Telp</th>
                                    <th>Alamat</th>
                                    <th>Waktu Batal</th>
                                </tr>
                              </tfoot>  
                            </table>
                          </div>
                        </div>
                      </div>
            </div>
@endsection