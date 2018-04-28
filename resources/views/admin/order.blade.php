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
                                <th>Status</th>
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
                                <td>{{$row->status}}</td>
                                <td>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prosesModal_{{$row->id}}" title="Proses"><i class="fa fa-refresh"></i></button>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{$row->id}}" title="Delete"><i class="fa fa-trash"></i></button>
                                
                                <!-- Delete Modal-->
                                <div class="modal fade" id="deleteModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header" style="background-color:#FDFC47; color:#000">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete Transaksi</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">Do You Want To Delete?</div>
                                      <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-danger" href="/deleteOrder/{{$row->id}}">Delete</a>
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
                                      <form>
                                        <div class="form-group">
                                            <label> ID </label>
                                            <input type="text" name="id" class="form-control col-md-2" id="id" readonly />
                                        </div>

                                        <div class="form-group">
                                          <label> Paket </label>
                                          <select name="paket" id="paket" class="form-control">
                                          <option value="Pegawai">Express</option>
                                          <option value="Manager">Ordinary</option>
                                          </select>
                                       </div>
                    
                                       <div class="form-group">
                                          <label> Jumlah</label>
                                          <input type="text" name="jumlah" class="form-control" id="jumlah"  maxlength="2"/>
                                          <div class="validation"></div>
                                       </div>
                    
                                      <div class="form-group">
                                        <label> Total </label>
                                        <input type="text" name="total" class="form-control" id="total" readonly/>
                                    </div>
                    
                                    <div class="form-group">
                                      <button type="button" data-toggle="modal" data-target="#myModal" class="form-control btn btn-primary">Proses</button>

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