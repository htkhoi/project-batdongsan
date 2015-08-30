<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>
    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @include('admin.stylesheet.login')
</head>
<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">WITH</div>
            </div>
            {!! Form::open(array('url' => 'login')) !!}
            <div class="loginbox-textbox">
                {!! Form::email('email', '', ['class'=>'form-control', 'placeholder' => 'Email']) !!}          
            </div>
            <div class="loginbox-textbox">
                {!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'Password']) !!}
            </div>
            <div class="loginbox-forgot">
                {!! link_to('#', 'Forgot Password?') !!}
            </div>
            <div class="loginbox-submit">
                {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="logobox">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            
            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
        </div>
    </div>   
</body>
</html>
