<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/img/laundry.png">
    <title>Jimbaran Laundry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	{{-- <script src="js/login.js"></script> --}}
    
</head>
<body>
		<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-login">
							<div class="panel-heading">
                                    <h1> Tambah Pegawai </h1>
								<hr>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">

                                        <form id="register-form" action="{{ route('register') }}" method="POST" role="form">
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
                                                    <input type="text" name="alamat" id="alamat" tabindex="1" class="form-control" placeholder="Address" value="{{ old('alamat') }}" required>
                                        
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

                                            <div class="form-group">
                                               <select name="role" id="role" class="form-control">
                                               <option value="Pegawai">Pegawai</option>
                                               <option value="Manager">Manager</option>
                                               </select>
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
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Tambah">
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
</body>
</html>