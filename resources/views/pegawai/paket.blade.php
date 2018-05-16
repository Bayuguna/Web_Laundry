@extends ('layout.pegawai')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a >Paket</a>
        </li>
        </ol>

        @include('include.pesan')

        <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-gift"></i> Paket
        
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
                    <th>Modal</th>
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
                    <td>{{$row->modal}}</td>
                    <td>
                    <button type="button" class="btn btn-success col-md-12" data-toggle="modal" data-target="#editModal_{{$row->id}}" title="Edit"><i class="fa fa-edit"></i></button>

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
                                    <div class="form-group {{ $errors->has('nama_paket') ? ' has-error' : '' }}">
                                    <input type="text" name="nama_paket" id="nama_paket" tabindex="1" class="form-control" value="{{$row->nama_paket}}" required>
                            
                                        @if ($errors->has('nama_paket'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama_paket') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                            
                                    <div class="form-group {{ $errors->has('harga_paket') ? ' has-error' : '' }}">
                                            <input type="text" name="harga_paket" id="harga_paket" tabindex="1" class="form-control" value="{{ $row->harga }}" required>
                                
                                            @if ($errors->has('harga_paket'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('harga_paket') }}</strong>
                                        </span>
                                    @endif
                                    </div>

                                    <div class="form-group {{ $errors->has('modal_paket') ? ' has-error' : '' }}">
                                            <input type="text" name="modal_paket" id="modal_paket" tabindex="1" class="form-control" value="{{ $row->modal }}" required>
                                
                                            @if ($errors->has('modal_paket'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('modal_paket') }}</strong>
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
                
                        <div class="form-group {{ $errors->has('nama_paket') ? ' has-error' : '' }}">
                            <input type="text" name="nama_paket" id="nama_paket" tabindex="1" class="form-control" placeholder="Name" value="{{ old('nama_paket') }}" required>
                
                            @if ($errors->has('nama_paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_paket') }}</strong>
                            </span>
                        @endif
                        </div>
                
                        <div class="form-group {{ $errors->has('harga_paket') ? ' has-error' : '' }}">
                            <input type="text" name="harga_paket" id="harga_paket" tabindex="1" class="form-control" placeholder="Harga" value="{{ old('harga_paket') }}" required>
                
                            @if ($errors->has('harga_paket'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_paket') }}</strong>
                        </span>
                        @endif
                        </div>

                        <div class="form-group {{ $errors->has('modal_paket') ? ' has-error' : '' }}">
                                <input type="text" name="modal_paket" id="modal_paket" tabindex="1" class="form-control" placeholder="Modal" value="{{ old('modal_paket') }}" required>
                    
                                @if ($errors->has('modal_paket'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('modal_paket') }}</strong>
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