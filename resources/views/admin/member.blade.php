@extends ('layout.dataMember')

@section('tables')

      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-drivers-license-o"></i> Members</div>
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <thead>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                              </tr>
                            </tfoot>  
                          </table>
                        </div>
                      </div>
                    </div>
          </div>
@endsection