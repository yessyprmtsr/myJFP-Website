@extends('customer.template.layout')
@section('content')
<div class="wrapper">
    <div class="title-text">
        <div class="title login">LogIn / SignUp</div>
        <!-- <div class="title signup">Welcom! SignUp</div> -->
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slider" id="login" checked>
            {{-- <input type="radio" name="slider" id="signup" checked> --}}
            <label for="login" class="slide login">LogIn</label>
            <a for="signup" href="{{ route('register')}}" class="slide signup">SignUp</a>
            <div class="slide-tab">

            </div>
        </div>
        <div class="form-inner">
            <form action="{{ route('login')}}" method="POST" class="login">
                @csrf
                <div class="field">
                    <input type="email" name="email" placeholder="email address" required>
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="password" required>
                </div>
                <div class="pass-link"><a href="{{ route('password.request') }}">Forget password?</a></div>
                <div class="field">
                    <input type="submit" value="LogIn">
                </div>
                <div class="signup-link">Not a Member yet? <a href="{{ route('register')}}">SignUp now</a></div>
            </form>
        </div>
    </div>
</div>
{{-- <script>
    const loginForm = document.querySelector("form.login");
    const signupForm = document.querySelector("form.signup");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector(".signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
        signupBtn.onclick();
        return false;
    });
</script>  --}}
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('/assetauth/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assetauth/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

                <form class="login100-form validate-form" action="{{ route('login')}}" method="POST">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{ asset('/assetauth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/assetauth/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/assetauth/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('/assetauth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/assetauth/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/assetauth/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('/assetauth/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/assetauth/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/assetauth/js/main.js')}}"></script> --}}

</body>
</html>