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
                                <th>No</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Alamat</th>
                              </tr>
                            </thead>

                            <tbody>
                                <?php $no = 0;?>
                                @foreach($member as $row)
                                <?php $no++ ;?>
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->telp}}</td>
                                <td>{{$row->alamat}}</td>
                              </tr>
                              @endforeach
                            </tbody>

                          </table>
                        </div>
                      </div>
                    </div>
          </div>
@endsection