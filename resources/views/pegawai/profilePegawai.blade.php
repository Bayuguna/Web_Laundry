@extends ('layout.pegawai')

@section('content')
<div class="content-wrapper">
        <div class="container-fluid">

<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a >Profile</a>
            </li>
          </ol>

          @include('include.pesan')

          <div class="mb-3 col-md-5 pull-left">

              <div class="container">
                  <div class="card-body">
                      
                      <div class="col-md-12 col-sm-12">
                          <img class="btn-md" src="/img/logo.png" alt="" width="250px" style="margin-left:30px;border-radius:50%;">
                          <h2 class="card-title" style="text-align:center"><strong>{{Auth::user()->name}}</strong></h2>
                          <p class="card-text" style="text-align:center;"><strong>Status: </strong>{{ Auth::user()->role->name}} </p>
                          <p class="card-text" style="text-align:center"><i class="badge badge-success">Online</i></p>
                          <p style="text-align:center;margin-top:50px">
                          <a href="" style="color:black"><i class="fa fa-twitter" style="margin:5px;"></i></a>
                          <a href="" style="color:black"><i class="fa fa-facebook" style="margin:5px"></i></a>
                          <a href="" style="color:black"><i class="fa fa-instagram" style="margin:5px"></i></a>
                          <a href="" style="color:black"><i class="fa fa-google-plus" style="margin:5px"></i></a> 
                          <a href="" style="color:black"><i class="fa fa fa-linkedin" style="margin:5px"></i></a> 
                          </p>
                          </div>
                    
                  </div>
                </div>
              </div>

          <div class="card mb-3 col-md-7 pull-right">

            <div class="container">
                <div class="card-body">
                  <form action="/profilePegawai/{{Auth::user()->id}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                      <div class="form-row">
                          <label for="name">Name</label>
                      <input class="form-control" id="name" name="name" type="text" aria-describedby="nameHelp" value="{{Auth::user()->name}}">
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <label for="name">Telephone</label>
                        <input class="form-control" id="telp" name="telp" type="text" aria-describedby="nameHelp" value="{{Auth::user()->telp}}" maxlength="12">
                        </div>
                      </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input class="form-control" id="email" name="email" type="email" aria-describedby="emailHelp" value="{{Auth::user()->email}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"  aria-describedby="emailHelp" >{{Auth::user()->alamat}}</textarea>
                    </div>

                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="password">Password</label>
                          <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                          <label for="password-confirm">Confirm password</label>
                          <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                      </div>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" name="edit" value="Save">
                  </form>
                </div>
              </div>
            </div>
        </div>
</div>

@endsection