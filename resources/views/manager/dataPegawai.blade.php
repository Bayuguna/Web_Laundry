@extends ('layout.manager')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Data Pegawai</a>
            </li>
        </ol>

            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-group"></i> Pegawai
                
                <span class="float-right">
                    <a data-toggle="modal" href="#tambahModal">
                    <i class="fa fa-plus"> Tambah Pegawai</i>
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
                        <th width="80px">Telp</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th width="60px">Jabatan</th>
                        <th width="70px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=0 ;?>
                      @foreach($pegawai as $row)
                      <?php $no++ ;?>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->telp}}</td>
                        <td>{{$row->alamat}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->role}}</td>
                        <td>
                          <a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{$row->id}}"><i class="fa fa-trash"></i></button>
                        
                        <!-- Delete Modal-->
                        <div class="modal fade" id="deleteModal_{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header" style="background-color:#EF3B36; color:#fff">
                                <h5 class="modal-title" id="deleteModalLabel">Delete Pegawai</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">Do You Want To Delete?</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger" href="/deletePegawai/{{$row->id}}">Delete</a>
                              </div>
                            </div>
                          </div>
                      </div>
                        
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                    
                  </table>

                  <!--Tambah Modal-->
                  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header"  style="background-color:#56ab2f; color:#fff">
                          <h5 class="modal-title" id="tambahModalLabel">Tambah Pegawai</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
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
@endsection