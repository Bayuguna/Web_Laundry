@extends ('layout.admin')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">

<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Paket</a>
            </li>
          </ol>

            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> Paket
            
                <a href="#tambahModal" data-toggle="modal">
                  <span class="float-right">
                    <i class="fa fa-plus"></i> Tambah Paket
                  </span>
                </a>
              
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th width="20px">No</th>
                        <th>Paket</th>
                        <th>Harga</th>
                        <th width="50px">Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    <?php $no = 0;?>
                      @foreach($paket as $row)
                    <?php $no++ ;?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->nama_paket}}</td>
                        <td>{{$row->harga}}</td>
                        <td>
                          {{-- <a data-toggle="modal" href="/deleteTransaksi/{{$row->id}}"><i class="fa fa-trash"></i></a> --}}
                          <button type="button" class="btn btn-success col-md-12" data-toggle="modal" data-target="#editModal_{{$row->id}}" title="Edit"><i class="fa fa-edit"></i></button>
                          {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{$row->id}}" title="Delete"><i class="fa fa-trash"></i></button> --}}
                        
                          {{-- <!-- Delete Modal-->
                          <div class="modal fade" id="deleteModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:#FDFC47; color:#000">
                                  <h5 class="modal-title" id="deleteModalLabel">Delete Paket</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body">Do You Want To Delete?</div>
                                <div class="modal-footer">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <form action="/paket/{{$row->id}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit" >Delete</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </div> --}}

                        <!--Edit Modal-->
                        <div class="modal fade" id="editModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header"  style="background-color:#56ab2f; color:#fff">
                                <h5 class="modal-title" id="tambahModalLabel">Edit Paket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <form id="register-form" action="/paket/{{$row->id}}" method="POST" >
                                    {{ csrf_field() }}
                                    {{method_field('PUT')}}
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" name="name" id="name" tabindex="1" class="form-control" value="{{$row->nama_paket}}" required>
                            
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                            
                                    <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
                                            <input type="text" name="harga" id="harga" tabindex="1" class="form-control" value="{{ $row->harga }}" required>
                                
                                            @if ($errors->has('harga'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('harga') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                            
                                    <div class="form-group float-right">
                                        <div class="row">
                                            <div class="col-sm-3 col-sm-offset-12">
                                                <button type="submit" class="btn btn-success">Edit</button>
                                            </div>
                                        </div>
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
                <!--Tambah Modal-->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"  style="background-color:#56ab2f; color:#fff">
                                    <h5 class="modal-title" id="tambahModalLabel">Tambah Paket</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <form id="register-form" action="/paket" method="POST" >
                                        {{ csrf_field() }}
                                
                                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                            <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                                
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                
                                        <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
                                            <input type="text" name="harga" id="harga" tabindex="1" class="form-control" placeholder="Harga" value="{{ old('harga') }}" required>
                                
                                            @if ($errors->has('harga'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('harga') }}</strong>
                                        </span>
                                        @endif
                                        </div>
                                
                                        <div class="form-group float-right">
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-12">
                                                    <button type="submit" class="btn btn-success">Tambah</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                                </div>
                            </div>

              </div>
            </div>
        </div>
</div>

@endsection