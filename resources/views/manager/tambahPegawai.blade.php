@extends('layout.manager')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
<!-- Breadcrumbs-->
      <ol class="breadcrumb col-md-6">
        <li class="breadcrumb-item">
          <a>Register Pegawai</a>
        </li>
      </ol>
      
<!-- Form -->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <form id="register-form" action="/tambah_pegawai" method="POST" >
                                {{ csrf_field() }}
                        
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                        
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                        
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                        
                                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                        <textarea name="alamat" id="alamat" row="3" tabindex="1" class="form-control" placeholder="Address" value="{{ old('alamat') }}" required></textarea>
                            
                                        @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        
                                 <div class="form-group {{ $errors->has('telp') ? ' has-error' : '' }}">
                                    <input type="text" name="telp" id="telp" tabindex="1" class="form-control" placeholder="Telephone Number" value="{{ old('telp') }}" maxlength="12" required>
                        
                                    @if ($errors->has('telp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telp') }}</strong>
                                    </span>
                                @endif
                                </div>
                        
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
                        
                                    <div class="form-group">
                                       
                                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                        
                                    </div>

                                    <div class="form-group">
                                        <select name="role" id="role" class="form-control">
                                        <option value="Pegawai">Pegawai</option>
                                        <option value="Manager">Manager</option>
                                        </select>
                                     </div>
                        
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3 col-sm-offset-12">
                                            <button type="button" class=" btn btn-success float-right" data-toggle="modal" data-target="#tambahModal">Tambah</button>
                                        </div>
                                    </div>
                                </div>

                                <!--Tambah Modal-->
                                <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:#D3CCE3; color:black">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">Apakah Anda Yakin?</div>
                                            <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success" >Yes</button>
                                            </div>
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
</div>
@endsection