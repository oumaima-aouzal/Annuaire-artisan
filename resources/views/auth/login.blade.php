<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Mentoring - Login</title>

<link rel="shortcut icon" type="image/x-icon" href="admin\assets\img\favicon.png">
<link rel="stylesheet" href="assets\css\bootstrap.min.css">
<link rel="stylesheet" href="assets\plugins\fontawesome\css\fontawesome.min.css">
<link rel="stylesheet" href="assets\plugins\fontawesome\css\all.min.css">
<link rel="stylesheet" href="assets\css\style.css">
<link rel="stylesheet" href="admin\assets\css\style.css">
<link rel="stylesheet" href="admin\assets\css\bootstrap.min.css">

<link rel="stylesheet" href="admin\assets\css\font-awesome.min.css">

<link rel="stylesheet" href="admin\assets\css\style2.css">
<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>

<div class="main-wrapper login-body">
    <div class="login-wrapper">
       <div class="container">
            <div class="loginbox">
                <div class="login-left">
                       <img class="img-fluid" src="assets\img\logo-white.png" alt="Logo">
                </div>
        <div class="login-right">
              <div class="login-right-wrap">
                  <h1>Connexion</h1>
                  <p class="account-subtitle">Accéder à notre tableau de bord</p>
                       <form method="POST" action="{{ route('login') }} ">
                        @csrf
                              <div class="form-group" >
                                 <input class="form-control" placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                                <div class="form-group">
                                    <div class="pass-group">
                                        <input class="form-control pass-input"  placeholder="Mot de Passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="fas fa-eye toggle-password" id="eye" onclick="toggles()" ></span>
                                    </div>
                                    </div>
                                <div class="form-group">

                                <button class="btn btn-primary btn-block" type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                </div>
                        </form>
  
    <div class="text-center forgotpass">
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Mot de passe oublié?') }}
        </a>
        @if (Route::has('password.request'))
                                   
         @endif          
    </div>
      <div class="login-or">
        <span class="or-line"></span>
        <span class="span-or">ou</span>
      </div>
    <div class="text-center dont-have">Vous n'avez pas de compte ?<a href="{{url('/register')}}">S'inscrire</a></div>
              </div>
        </div>
            </div>
       </div>
    </div>
</div>

<script>
	var state= false;
	function toggles()
	{
	if(state){
	document.getElementById("password").setAttribute("type","password");
	state = false;
	}
	else{
	document.getElementById("password").setAttribute("type","text");
	state = true;
	}
	}
	</script>
<script src="admin\assets\js\jquery-3.2.1.min.js"></script>

<script src="admin\assets\js\popper.min.js"></script>
<script src="admin\assets\js\bootstrap.min.js"></script>

<script src="admin\assets\js\script.js"></script>
</body>
</html>


















 {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form> --}}