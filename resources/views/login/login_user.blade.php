@extends ('layout.login')

@section('content')
<div class="container">
	<div class="login-container">
            <div id="output"></div> 
            <h1> Welcome </h1>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="" method="">
                    <input name="user" type="text" placeholder="username">
                    <input type="password" placeholder="password">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                <div> 
                    <a name="regist" href="/register"> Sign Up </a>
                </div>
                <div>
                    <a name="admin" href="/login-admin"> Login as Admin? </a>
                </div>
                </form>
            </div>
        </div>
</div>
@endsection