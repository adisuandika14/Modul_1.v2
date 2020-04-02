<!DOCTYPE html>
<html>

<head>

	<title>Registration Form</title>

    <link rel="stylesheet" type="text/css" href="{{asset('cssadmin/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cssadmin/register.css')}}">

</head>

	<header>
		<h1>REGISTER ADMIN </h1>
    </header>
    <div class="main-content">
        <form class="form-register" method="POST" action="{{ url('admin/register') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" placeholder="<?php if($errors->has('name')){echo $errors->first('name');} ?>" name="name" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label for="name">
                            <span>Nomor Telephone</span>
                            <input type="phone" placeholder="<?php if($errors->has('phone')){echo $errors->first('phone');} ?>" name="phone" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label for="name">
                            <span>Username</span>
                        </label>
                            <input type="text" placeholder="<?php if($errors->has('username')){echo $errors->first('username');} ?>" name="username" required>
                        
                    </div>

                    <div class="form-row">
                        <label for="psw">
                            <span>Password</span>
                        </label>
                            <input type="password" placeholder="<?php if($errors->has('password')){echo $errors->first('password');} ?>" name="password" required>
                        
                    </div>

                    <div class="form-row">
                        <label for="psw">
                            <span>Confirm Password</span>
                            <input type="password" placeholder="<?php if($errors->has('password')){echo $errors->first('password');} ?>" name="password_confirmation" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label for="file">
                            <span>Foto</span>
                        </label>
						<input type="file" placeholder="<?php if($errors->has('file')){echo $errors->first('file');} ?>" name="file" required>
                        
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Register</button>
                    </div>

                </div>
                <a href="login" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>
            </div>
             <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign up with</span>
                </div>

                <a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>

            </div>
        </form>
    </div>
</body>

</html>