<!-- CSS -->
<link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
<!-- /CSS -->
<style>
    body{
        padding-top : 165px;
    }
</style>
<body>
<div class="wrap-form-contact"> 
    <div class="container">
        <div class="row">
            <h3 align="center"><span><i class="fas fa-ticket-alt"></i></span>  HAYUCAW - LOGIN</h3>
            <div class="col-md-4 col-md-offset-4">
                <div class="form-contact">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                            
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                            </a>
                        </div>
                        <div class="submit">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a class="btn btn-link" href="{{ route('register') }}">Register Now</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>