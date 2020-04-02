<!-- <!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="{{asset('cssadmin/login.css')}}">
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
</head>
<body>
	<h1>login Admin</h1>
	<div class="main" >
		
		<div class="agile">
			<div class="signin-form profile">
				<div class="login-form">
					<form action="{{ url('admin/login') }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="text" name="username" placeholder="Username" >
						<input type="password" name="password" placeholder="Password">
						<input type="submit" value="submit">
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>				
</body>
</html>
 -->

 <!DOCTYPE html>
<html>

<head>
	<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="{{asset('cssadmin/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('cssadmin/login.css')}}">

</head>


	<header>
		<h1>LOGIN ADMIN</h1>
    </header>

    <div class="main-content">
        <form class="form-login" method="post" action="{{ url('admin/login') }}" enctype="multipart/form-data">
        	{{ csrf_field() }}
            <div class="form-log-in-with-email">
                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Log in</h1>
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
                        <button type="submit">Log in</button>
                    </div>

                </div>

                <a href="#" class="form-forgotten-password">Forgotten password &middot;</a>
                <a href="register" class="form-create-an-account">Create an account &rarr;</a>

            </div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>

                <a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>

            </div>

        </form>

    </div>

</body>

</html>
