@extends ('layout.transaksi')

@section('tables')

      <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-clock-o"></i> Transaksi
            <span class="float-right">
              <a data-toggle="modal" href="#tambahModal">
                <i class="fa fa-plus"> Tambah Transaksi</i>
              </a>
            </span>
          </div>
                    
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th width="20px">No</th>
                    <th>Nama</th>
                    <th width="130px">Waktu</th>
                    <th width="200px">Catatan</th>
                    <th>Total</th>
                    <th width="50px">Status</th>
                    <th width="70px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php($no=0)
                  @foreach($transaksi as $row)
                  @php($no++)
                  @if($row->status_order != 'batal')
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$row->member->name}}</td>
                    <td>{{$row->tgl_order}}</td>
                    <td>{{$row->catatan}}</td>
                    <td>{{$row->det_transaksi->sum('total_bayar')}}</td>
                    @if($row->status_order == 'order')
                      <td><span class="badge badge-warning col-md-12">{{$row->status_order}}</span></td>
                    @elseif($row->status_order == 'proses')
                      <td><span class="badge badge-primary col-md-12">{{$row->status_order}}</span></td>
                    @elseif($row->status_order == 'batal')
                      <td><span class="badge badge-danger col-md-12">{{$row->status_order}}</span></td>
                    @else
                      <td><span class="badge badge-success col-md-12">{{$row->status_order}}</span></td>
                    @endif
                    <td>
                      @if($row->status_order == 'order')
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prosesModal_{{$row->id}}" title="Proses"><i class="fa fa-refresh"></i></button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{$row->id}}" title="Batal"><i class="fa fa-times"></i></button>
                      @elseif($row->status_order == 'proses')
                          @if($row->det_transaksi->count('id') != NULL)
                            @if($row->status_bayar == 'belum bayar')
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#prosesModal_{{$row->id}}" title="Tambah"><i class="fa fa-plus"></i></button>
                              <a class="btn btn-info" href="/detailTransaksi/{{$row->id}}" title="Detail Transaksi"><i class="fa fa-eye"></i></a>                                  
                            @else
                            <a class="btn btn-info col-md-12" href="/detailTransaksi/{{$row->id}}" title="Detail Transaksi"><i class="fa fa-eye"></i></button>
                            @endif
                          @else
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#prosesModal_{{$row->id}}" title="Tambah"><i class="fa fa-plus"></i></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{$row->id}}" title="Batal"><i class="fa fa-times"></i></button>
                          @endif
                      @else
                        <a class="btn btn-info col-md-12" href="/detailTransaksi/{{$row->id}}" title="Detail Transaksi"><i class="fa fa-eye"></i></button>
                      @endif
                    
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
                              <form action="/transaksi/{{$row->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                  <button type="submit" class="btn btn-danger"> Batal</button>
                              </form>
                              
                            </div>
                          </div>
                        </div>
                    </div>


                  <!--Proses Modal-->
                  <div class="modal" id="prosesModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color:#2F80ED; color:#fff;">
                          <h5 class="modal-title" id="prosesModalLabel">Transaksi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body proses">
                          <form action="/transaksi" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label> ID </label>
                                <input type="text" name="id" class="form-control col-md-2" id="id" value="{{$row->id}}" readonly />
                            </div>

                            <div class="form-group">
                              <label> Paket </label>
                              <select name="paket"  class="form-control paket">
                                <option value="">Paket</option>
                                @foreach($paket as $row)
                                  <option value="{{$row->id}}">{{$row->nama_paket}}</option>
                                @endforeach
                              </select>
                          </div>
        
                          <div class="form-group">
                              <label> Harga</label>
                                <input type="text" name="harga" class="harga form-control" id="harga"  maxlength="2" onkeyup="sum();" disabled />
                              <div class="validation"></div>
                          </div>

                          <div class="form-group">
                              <label> Jumlah</label>
                                <input type="text" name="jumlah" class="jumlah form-control" id="jumlah"  maxlength="4" required>
                              <div class="validation"></div>
                          </div>
        
                          <div class="form-group">
                            <label> Total </label>
                            <input type="text" name="total" class="total form-control" id="total" value="" readonly/>
                        </div>

                        {{-- <div class="form-group checkbox pull-right">
                            <label><input type="checkbox" name="lunas" id="lunas" value="lunas"> Lunas</label>
                        </div> --}}
        
                        <div class="form-group">
                          <button type="submit" class="form-control btn btn-primary">Proses</button>

                        </div>

                        {{-- <script>
                            function sum() {
                                  var harga = document.getElementsByClassName('harga').value;
                                  var jumlah = document.get('jumlah').value;
                                  var result = parseInt(harga) * parseInt(jumlah);
                                  if (!isNaN(result)) {
                                    // document.parent().parent().find('#total').value = result;
                                    console.log(result)
                                  }
                            }
                          </script> --}}
                      </form>
                    </div>
                  </div>
                </div>

              </div>  
                </td>

                </tr>
                @endif
                  @endforeach
            </tbody>
              </table>
            </div>
          </div>

          <!--Tambah Modal-->
          <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#56ab2f; color:#fff">
                  <h5 class="modal-title" id="tambahModalLabel">Transaksi Baru</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="/transaksiA " method="POST" role="form" class="contactForm">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label> Name :</label>
                      <select name="nama_customer" id="nama_customer" class="form-control">
                        <option value="">Nama</option>
                        @foreach($member as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                          @endforeach
                      </select> 
                      <div class="validation"></div>
                    </div>

                  <div class="form-group">
                      <label> Alamat :</label>
                        <textarea name="alamat_customer" id="alamat_customer" class="form-control" placeholder="Alamat" readonly></textarea>
                  </div>

                  <div class="form-group">
                    <label> Telp :</label>
                      <input type="text" name="telp_customer" class="form-control" id="telp_customer" placeholder="Telp" readonly>
                    <div class="validation"></div>
                  </div>

                  <div class="form-group">
                    <label> Note :</label>
                    <textarea class="form-control" name="message" rows="5" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>

                    <div class="form-group"><button type="submit" class="form-control btn btn-success btn-block ">Order</button></div>                            
                  </form>
            </div>
          </div>
        </div>
</div>
@endsection

@section('script')
    <!-- Tampilkan Data member -->
    <script>
        $(document).ready(function(){
            $("#nama_customer").on('change', function(){
            if($(this).val() != ''){
              var name = $("#nama_customer").val();
              // console.log(typeof(name) )
            $.ajax({
              url:"/data?q="+name,
              dataType: "json",
              success:function(value){
                $("#alamat_customer").val(value.alamat);
                $("#telp_customer").val(value.telp);
                // console.log(value)
              }
            });
            }else{
              // console.log("kosongin...")
              $("#alamat_customer").val("");
              $("#telp_customer").val("");
            }
            
          });

          $(".paket").on('change', function(){
              if($(this).val() != ''){
                var paket = $(this).val();
                var url="/harga?q=" +paket
                var tag=$(this)
                // console.log(url)
              $.ajax({
                url:"/harga?q=" +paket,
                dataType: "json",
                success:function(value){
                  tag.parent().parent().find(".harga").val(value.harga)
                  let harga=value.harga
                  let jumlah=tag.parent().parent().find(".jumlah").val(); 
                  let kali = Number(jumlah) * Number(harga);
                  // console.log(harga)
                  tag.parent().parent().find(".total").val(kali);
                }
              });
              }else{
                $(this).parent().parent().find(".harga").val("");
                $(this).parent().parent().find(".total").val("");
              }      
            });
          
            $(".jumlah").keyup(function() {
              var harga = $(this).parent().parent().find(".harga").val(); 
              var jumlah = $(this).val(); 
              var kali = Number(jumlah) * Number(harga);
              if ( jumlah != "" && harga != "" ) {
                $(this).parent().parent().find(".total").val(kali);
                // console.log(kali)
              }
              })
        });
      </script>
  
      <!-- Tampilkan Data member -->
      {{-- <script>
        $(document).ready(function(){
            $('.nama_customer').select2();
              // placeholder: 'Nama',
              // ajax:{
              //   url:'/data',
              //   dataType: 'json',
              //   delay: 250,
              //   processResults: function(data){
              //     return{
              //       results: $.map(data, function(value){
              //         return{
              //           alamat: value.alamat,
              //           telp: value.telp
              //         }
              //       })
              //     };
              //   },
              //   catch: true
              // }
            
        });
        </script> --}}
  
@endsection