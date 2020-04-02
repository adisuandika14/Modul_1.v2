<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url(../assets/images/bg-01.jpg);"></div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form action="{{ url('user/register') }}" class="login100-form validate-form"  method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input">
					<label for="name">
						<span class="label-input100">Full Name</span>
					</label>
						<input class="input100" type="text" placeholder="<?php if($errors->has('name')){echo $errors->first('name');} ?>" name="name" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
					<label for="email">
						<span class="label-input100">Email</span>
					</label>
						<input class="input100" type="text" placeholder="<?php if($errors->has('email')){echo $errors->first('email');} ?>" name="email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
					<label for="status">
						<span class="label-input100">status</span>
					</label>
						<input class="input100" type="text" placeholder="<?php if($errors->has('status')){echo $errors->first('status');} ?>" name="status" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
					<label for="psw">
						<span class="label-input100">Password</span>
					</label>
						<input class="input100" type="password" placeholder="<?php if($errors->has('password')){echo $errors->first('password');} ?>" name="password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
					<label for="psw">
						<span class="label-input100">Repeat Password</span>
					</label>
						<input class="input100" type="password" placeholder="<?php if($errors->has('password')){echo $errors->first('password');} ?>" name="password_confirmation" required>
						<span class="focus-input100"></span>
					</div>

					<div>
					<label for="file">
						<span class="label-input100">Foto Anda</span>
					</label>
						<input type="file" placeholder="<?php if($errors->has('file')){echo $errors->first('file');} ?>" name="file" required>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Sign Up
							</button>
						</div>

						<a href="login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>