@extends('layout.reset')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

            @guest
            <li><a href="{{ route('login') }}">Sign In</a></li>
                @else
                    <li class="dropdown">
                        <a href="/profile" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            <span class="caret"></span> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>

                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        </ul>
                    </li>
                @endguest

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
