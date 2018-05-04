@extends('layout.app')

@section('content')

                        <form id="login-form" action="{{ route('login') }}" method="POST" role="form" style="display: block;">
                            {{ csrf_field() }}    
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">											</div>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                     @endif
                                    <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                                    <label for="remember" > Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="{{ route('password.request') }}" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="{{ route('password.request') }}" tabindex="5" class="forgot-password">Login as Admin?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>


@endsection
