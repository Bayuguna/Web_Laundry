<!DOCTYPE html>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
		<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-login">
							<div class="panel-heading">
								<div class="row">
                                	<div class="col-xs-4">
										<a href="{{route('login')}}" >Login</a>
                                    </div>
                                    
                                    <div class="col-xs-4">
                                            <a href="/user" ><i class="fa fa-home"></i></a>
                                        </div>

									<div class="col-xs-4">
                                    <a href="{{route('register')}}" >Register</a>
									</div>
								</div>
								<hr>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">

                                        @yield('content')
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>