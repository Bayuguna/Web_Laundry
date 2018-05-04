<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/laundry.png">
    <title>Profile</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/profile.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" style="margin-top :20px; padding:5px; border :1px solid aqua;">                        
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
                    {{-- <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i>Transaksi</a></li> --}}
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </div>
        <form action="/profile/{{Auth::user()->id}}" method="POST">
                {{ csrf_field() }}
                {{method_field('PUT')}}
            <div class="col-md-9  admin-content" id="profile" style="margin-top:20px; border:1px solid aqua; padding:5px">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body">
                        <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->name}}">
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                        <input type="email" name="email" id="email" class="form-control" value="{{Auth::user()->email}}">
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alamat</h3>

                    </div>
                    <div class="panel-body">
                        <textarea  name="alamat" row="3" id="alamat" class="form-control" >{{Auth::user()->alamat}}</textarea>
                    </div>
                </div>

                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Telp</h3>

                    </div>
                    <div class="panel-body">
                        <input type="text" name="telp" id="telp" class="form-control" value="{{Auth::user()->telp}}" maxlength="12">
                    </div>
                </div>

                <div class="panel-body pull-right">
                    <button class="btn btn-success form-control" type="submit">Save</button>
                </div>
            </div>

        </form>

        <div class="col-md-9  admin-content" id="change-password">
                <form action="/password/{{Auth::user()->id}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
           
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="password" class="control-label panel-title">New Password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>

                        </div>
                    </div>

             
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Confirm password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>
                    </div>

           
                        <div class="panel-body pull-right">
                                   <button type="submit" class="btn btn-success form-control">Save</button>
                        </div>

                </form>
            </div>

   {{-- <div class="col-md-9  admin-content" id="settings">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Notification</h3>
                    </div>
                    <div class="panel-body">
                        <div class="label label-success">allowed</div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Newsletter</h3>
                    </div>
                    <div class="panel-body">
                        <div class="badge">Monthly</div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin</h3>

                    </div>
                    <div class="panel-body">
                         <div class="label label-success">yes</div>
                    </div>
                </div>

            </div> --}}

            <div class="col-md-9  admin-content" id="settings"></div>

            <div class="col-md-9  admin-content" id="logout">
                <div class="panel panel-info" style="margin: 1em;">
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
                            </form>
                                
                        <a href="/user" class="btn btn-success"> <span >  No   </span></a>
                    </div>
                    <form id="logout-form" action="#" method="POST" style="display: none;">
                    </form>



                </div>
            </div>
        </div>
    </div>
</body>
</html>
