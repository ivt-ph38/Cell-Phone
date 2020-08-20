<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/vendor/bootstrap/css/bootstrap.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/fonts/iconic/css/material-design-iconic-font.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/vendor/animate/animate.css")}}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/vendor/css-hamburgers/hamburgers.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/vendor/animsition/css/animsition.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/vendor/select2/select2.min.css")}}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/vendor/daterangepicker/daterangepicker.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/css/util.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("admin/login/css/main.css")}}>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				@if(Session::has('error'))
					<p style="color: red;" >{{Session::get('error')}}</p>
				@endif
				<form action="{{route('adminlogin')}}" method="POST" class="login100-form validate-form">
					@csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if($errors->has('email'))
							<p style ="color: red;">{{$errors->first('email')}}</p>
						@endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@if($errors->has('password'))
							<p style ="color: red;">{{$errors->first('password')}}</p>
						@endif
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src={{asset("admin/login/vendor/jquery/jquery-3.2.1.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("admin/login/vendor/animsition/js/animsition.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("admin/login/vendor/bootstrap/js/popper.js")}}></script>
	<script src={{asset("admin/login/vendor/bootstrap/js/bootstrap.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("admin/login/vendor/select2/select2.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("admin/login/vendor/daterangepicker/moment.min.js")}}></script>
	<script src={{asset("admin/login/vendor/daterangepicker/daterangepicker.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("admin/login/vendor/countdowntime/countdowntime.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("admin/login/js/main.js")}}></script>

</body>
</html>