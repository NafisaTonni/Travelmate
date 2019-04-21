<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Popup Login & Signup with jQuery</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/main.css">

  
</head>

<body>

	
		
		<div id="modal" class="popupContainer">
				<header class="popupHeader">
						<span class="header_title">Login</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
				</header>

				<section class="popupBody">
<!----------------------------------------------------- Social Login ------------------------------------------------------------>
						<div class="social_login">
								<div class="">
										<a href="#" class="social_box fb">
												<span class="icon"><i class="fa fa-facebook"></i></span>
												<span class="icon_title">Connect with Facebook</span>

										</a>

										<a href="#" class="social_box google">
												<span class="icon"><i class="fa fa-google-plus"></i></span>
												<span class="icon_title">Connect with Google</span>
										</a>
								</div>

								<div class="centeredText">
										<span>Or use your Email address</span>
								</div>

								<div class="action_btns">
										<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
										<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
								</div>
						</div>

<!--------------------------------------- Username & Password Login form ---------------------------------------------------->
						<div class="user_login">
								<form action="" method="">
										<label>Email / Username</label>
										<input type="text" />
										<br />

										<label>Password</label>
										<input type="password" />
										<br />

										<div class="checkbox">
												<input id="remember" type="checkbox" />
												<label for="remember">Remember me on this computer</label>
										</div>

										<div class="action_btns">
												<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
												<div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
										</div>
								</form>

								<a href="#" class="forgot_password">Forgot password?</a>
						</div>

<!----------------------------------------- Register Form --------------------------------------------------------------------------->
						<div class="user_register">
								<form action="" method="">
										<label> Name</label>
										<input type="text" >
										<br />

										<label>Email Address</label>
										<input type="email" >
										<br />

										<label> Gender</label>
										<input type="radio" name="gender" value="male"> Male
										<input type="radio" name="gender" value="female"> Female
										<input type="radio" name="gender" value="other"> Other
										<br />

										<label>Email</label>
										<input type="text" >
										<br />

										<label>Password</label>
										<input type="password" >
										<br />

										<label>Image</label>
										<input type="file" >
										<br />

										<label>NID</label>
										<input type="text" >
										<br />

										<label>Phone Number</label>
										<input type="text" />
										<br />

										

										<div class="action_btns">
												<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
												<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
										</div>
								</form>
						</div>
				</section>
		</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
