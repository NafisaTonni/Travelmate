<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>
<div style="background-color: black;">
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php" style="font-family: verdana">TravelMates</a></div>
						</div>
							<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
			
								<li><a href="tour.php">Tours</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="login.php">Log In</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    	  <!-- lgin -->

   <div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="login">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#" style="float: left;">
							Forgot Password?
						</a>
						<a class="txt1" href="#" data-placeholder="&#xf207;" style="float: right;" onclick="magic();">
							Open an Account 
						</a>
					</div>
					
				</form>
			
	
				<!-- sign up -->
             
					<form class="login100-form validate-form" id="signup" style="display: none;">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sign Up
					</span>

				<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="Name" placeholder="Enter Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="text" name="Email" placeholder="Enter Email">
						<span class="focus-input100" data-placeholder="&#9993;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Enter Gender">
						<span style="color: black;">Gender: &nbsp;&nbsp;  </span>
					<input type="radio" name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="other"> Other
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter phonenumber">
						<input class="input100" type="text" name="phonenumber" placeholder="Enter phonenumber">
						<span class="focus-input100" data-placeholder="&#xf2b6;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter NID">
						<input class="input100" type="text" name="NID" placeholder="NID">
						<span class="focus-input100" data-placeholder="&#xf201;"></i></span>
				</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Address">
						<input class="input100" type="text" name="Address" placeholder="Enter Address">
						<span class="focus-input100" data-placeholder="&#xf200;"></i></span>
				</div>

				<input type="radio" name="" value="male">

				<div class="wrap-input100 validate-input">
					<span style="color: white; float: left;">Image:</span>
					<input class="input100" type="file" name="image" accept="image/*"></span>
				</div>

					

				<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
				</div>
			
			</div>
		</div>
	</div>
	

	<!-- <div id="dropDownSelect1"></div> -->
	




    <!-- lgin -->

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script type="text/javascript">
 	
 	function magic(){

 		var c= document.getElementById("login");
 		var d= document.getElementById("signup");
 		c.style.display= "none";
 		d.style.display= "block";
 	}

 </script>		
</div>
</div>
</body>
</html>
