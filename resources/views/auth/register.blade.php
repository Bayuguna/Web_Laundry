@extends('layout.app')

@section('content')
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
                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register">
                </div>
            </div>
        </div>
    </form>
@endsection
