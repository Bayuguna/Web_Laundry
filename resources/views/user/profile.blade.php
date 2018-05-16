@extends('layout.profile')

@section('content')
        <form action="/profile/{{Auth::user()->id}}" method="POST">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                
            <div class="col-md-9 admin-content" id="profile" >
                <div class="panel panel-primary" style="background: azure;margin-top:20px">
                    <div class="panel-heading">
                        <div class="panel-title">Profile</div>
                    </div>
                <div class="panel panel-info" style="margin: 1em;background: azure;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nama</h3>
                    </div>
                    <div class="panel-body">
                        <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->name}}">
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;background: azure;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                        <input type="email" name="email" id="email" class="form-control" value="{{Auth::user()->email}}">
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;background: azure;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alamat</h3>

                    </div>
                    <div class="panel-body">
                        <textarea  name="alamat" row="3" id="alamat" class="form-control" >{{Auth::user()->alamat}}</textarea>
                    </div>
                </div>

                <div class="panel panel-info" style="margin: 1em;background: azure;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Telp</h3>

                    </div>
                    <div class="panel-body">
                        <input type="text" name="telp" id="telp" class="form-control" value="{{Auth::user()->telp}}" maxlength="12">
                    </div>
                </div>

                <div class="panel-body ">
                    <button class="btn btn-primary form-control" type="submit">Save</button>
                </div>
            </div>
        </div>
        </form>
            

        <div class="col-md-9 admin-content" id="change-password" >
                <form action="/password/{{Auth::user()->id}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
        <div class="panel panel-primary" style="background: azure;margin-top:20px">
                                <div class="panel-heading">
                                    <div class="panel-title">Change Password</div>
                                </div> 
                    <div class="panel panel-info" style="margin: 1em;background: azure;">
                        <div class="panel-heading">
                            <div class="panel-title">New Password</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                            </div>

                        </div>
                    </div>

                    <div class="panel panel-info" style="margin: 1em;background: azure;">
                        <div class="panel-heading">
                            <div class="panel-title">Confirm password</div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                        <div class="panel-body">
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-9  admin-content" id="transaksi">
                    <div class="panel panel-primary" style="background: azure;margin-top:20px">
                            <div class="panel-heading">
                                <div class="panel-title">Riwayat Transaksi</div>
                            </div> 
                            <div class="panel panel-info" style="margin: 1em;">
                                <div class="card mb-3" style="margin-top:15px; margin-bottom:10px">
                                        <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php(
                                                $no = 0
                                                )
                                                @foreach($table as $row)
                                                @php(
                                                $no++
                                                )
                                                <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$row->tgl_order}}</td>
                                                <td>{{$row->det_transaksi->sum('total_bayar')}}</td>
                                                <td><span class="label label-success col-md-12">{{$row->status_order}}</span></td>
                                                <td>
                                                    <a class="btn btn-info col-md-12" href="/profile/{{$row->id}}" title="Detail Transaksi"><i class="fa fa-eye"></i></button>
                                                </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            
                                            </table>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            </div>

                        </div>

            <div class="col-md-9  admin-content" id="logout">
                    <div class="panel panel-primary" style="background: azure;margin-top:20px">
                            <div class="panel-heading">
                                <div class="panel-title">Log Out</div>
                            </div> 
                <div class="panel panel-info" style="margin: 1em;background: azure;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                    </div>
                    <div class="panel-body">
                        Do you really want to logout ?  
                        <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="btn btn-danger">
                            <span >   Yes   </span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                        </form><a href="/profile" class="btn btn-success"> <span >  No   </span></a>
                    </div>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                    </form>



                </div>
            </div>
        </div>
@endsection
