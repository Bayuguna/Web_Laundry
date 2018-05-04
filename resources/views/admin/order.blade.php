@extends ('layout.transaksi')

@section('tables')
      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-clock-o"></i> Order
          
            <span class="float-right">
              <a href="/orderA">
                <i class="fa fa-plus"> Tambah Transaksi</i>
              </a>
            </span>
          </div>
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                           <thead>
                              <tr>
                                <th width="20px">No</th>
                                <th>Nama</th>
                                <th width="90px">Telp</th>
                                <th>Alamat</th>
                                <th width="130px">Waktu</th>
                                <th>Catatan</th>
                                <th width="50px">Status</th>
                                <th width="65px">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $no=0 ;?>
                              @foreach($order as $row)
                              <?php $no++ ;?>
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$row->member->name}}</td>
                                <td>{{$row->member->telp}}</td>
                                <td>{{$row->member->alamat}}</td>
                                <td>{{$row->tgl_order}}</td>
                                <td>{{$row->catatan}}</td>
                                <td>{{$row->status_order}}</td>
                                <td>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prosesModal_{{$row->id}}" title="Proses"><i class="fa fa-refresh"></i></button>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{$row->id}}" title="Batal"><i class="fa fa-times"></i></button>
                                
                                <!-- Batal Modal-->
                                <div class="modal fade" id="deleteModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header" style="background-color:#FDFC47; color:#000">
                                          <h5 class="modal-title" id="deleteModalLabel">Batal Transaksi</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">Apakah Anda Ingin Membatalkan Transaksi?</div>
                                        <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                          <form action="/order/{{$row->id}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                              <button type="submit" class="btn btn-danger"> Batal</button>
                                          </form>
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>


                              <!--Proses Modal-->
                              <div class="modal fade" id="prosesModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header" style="background-color:#2F80ED; color:#fff;">
                                      <h5 class="modal-title" id="prosesModalLabel">Transaksi</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="/order" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label> ID </label>
                                            <input type="text" name="id" class="form-control col-md-1" id="id" value="{{$row->id}}" readonly />
                                        </div>

                                        <div class="form-group">
                                          <label> Paket </label>
                                          <select name="paket" id="paket" class="form-control">
                                            @foreach($paket as $row)
                                              <option value="{{$row->id}}">{{$row->nama_paket}}</option>
                                            @endforeach
                                          </select>
                                       </div>

                                       <script type="text/javascript">
                                        $(document).ready(function(){
                                            $('#paket').on('change', function(e){
                                                var id = e.target.value;
                                                $.get('{{ url('order')}}/'+id, function(data){
                                                    console.log(id);
                                                    console.log(data);
                                                    $('#harga').empty();
                                                    $.each(data, function(index, element){
                                                        $('#harga').append("<tr><td>"+element.id_motor+"</td><td>"+element.id_merk+"</td>"+
                                                        "<td>"+element.nama_motor+"</td></tr>");
                                                    });
                                                });
                                            });
                                        });
                                    </script>
                    
                                       <div class="form-group">
                                          <label> Harga</label>
                                          @foreach($paket as $row)
                                            <input type="text" name="harga" class="form-control" id="harga"  maxlength="2" value="{{$row->harga}}" disabled />
                                          @endforeach
                                          <div class="validation"></div>
                                       </div>

                                       <div class="form-group">
                                          <label> Jumlah</label>
                                            <input type="text" name="jumlah" class="form-control" id="jumlah"  maxlength="2" />
                                          <div class="validation"></div>
                                       </div>
                    
                                      <div class="form-group">
                                        <label> Total </label>
                                        <input type="text" name="total" class="form-control" id="total" value="" readonly/>
                                    </div>
                    
                                    <div class="form-group">
                                      <button type="submit" class="form-control btn btn-primary">Proses</button>

                                    </div>
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
          </div>
@endsection