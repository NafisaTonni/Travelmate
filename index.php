<!DOCTYPE HTML>
<html>

<?php
if(!isset($_SESSION))
{
	session_start();
}
include ('takeplace.php');
//echo $_SESSION['username'];
//exit();
?>

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travelmates</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- login -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/main.css">
	<!---------------------------------------------- login --------------------------------------------------------------->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

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

								<?php
								
									if(isset($_SESSION['username']))
										{
										echo "

										<li class='has-dropdown'>
									<a  href='#' >".$_SESSION['username']."</a>
									<ul class='dropdown'>
										<li><a href='profile.php'>profile</a></li>
										<li><a href='Api/logout.php'>log out</a></li>
										
									</ul>
								</li>";
										}
								else{									
									echo "<li><a id='myBtn'  href='#'>logIn</a></li>";
								}
								?>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
<!-------------------------------------------------- login signup ---------------------------------------------------->		
		<div id="myModal" class="modal" style="overflow: scroll;" >

  <!-- Modal content -->
 <div id="modal" class="popupContainer">  
				<header class="popupHeader">
						<span class="header_title">Login</span>
						
				</header>

				<section class="popupBody">
						<!-- Social Login -->
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
										<div id="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
										<div id="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
								</div>
						</div>

<!------------------------------------ Username & Password Login form ---------------------------------------------------------------->
						<div class="user_login">
								<form action="Api/login.php" method="post">

										<label>Email / Username</label>
										<input type="text" name="email">
										<br />

										<label>Password</label>
										<input type="password" name="password">
										<br />

									<div class="action_btns">
												<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
												<div class="one_half last"><input type="submit" name="" class="btn btn_red" value="Log In"></div>
										</div>
								</form>

								<a href="#" class="forgot_password">Forgot password?</a>
						</div>

<!------------------------------------------------- signup Register Form ----------------------------------------->
						<div class="user_register">
								<form action="Api/signup.php" method="post" enctype="multipart/form-data">
										<label> Name</label>
										<input type="text" name="Username" >
										<br />

										<label>NID</label>
										<input type="text" name="NID" >
										<br />

										<label>Phone Number</label>
										<input type="text" name="PhoneNumber">
										<br />

										<label>Email</label>
										<input type="text" name="Email" >
										<br />

										<label>Password</label>
										<input type="password" name="Password" id="pass">
										<br />

										<label>Confirm Password</label>
										<input type="password" name="ConfirmPassword" id="cpass">
										<br />

										<label> Gender</label>
										<input type="radio" name="Gender" value="male"> Male
										<input type="radio" name="Gender" value="female"> Female
										<input type="radio" name="Gender" value="other"> Other
										<br />

										<label>Image</label>
										<input type="file" name="image">
										<br />

										<div class="action_btns">
												<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
												<div class="one_half last">
													<input type="submit" name="" value="SignUp">
												</div>
										</div>
								</form>
						</div>
				</section>
		</div>

</div>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Bandarban</h1>
				   					<h2>Hill Tracts <br>surround by The beauty of Nature</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Sajek</h1>
				   					<h2>Knows as <br> The kingdom of the Clouds</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Cox's Bazar</h1>
				   					<h2>The longest Sea Beach <br>Of the World</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>saint martin</h1>
				   					<h2>The one and only <br>coral island of Bangladesh</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><img src="images/matehandshake.png"> Find Mates</a></li>
							</ul>
						</div>
						<div class="tab-content" >
							<div id="flight" class="tab-pane fade in active">
								<form action="findmate.php" method="post" class="colorlib-form">
				              	<div class="row"style="margin-left: 200px;">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" name="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" id="in_date" name="in_date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" id="out_date" name  = "out_date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Mates" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>

				  <form action="posttour.php" method="post">
				            	<b style="color: white;">location:</b> <input type="text" name="location">
				            	<b style="color: white;">startdate:</b><input type="date" name="startdate">
				            	<b style="color: white;">enddate:</b><input type="date" name="enddate">
				            	<b style="color: white;">Description:</b><textarea name="description"></textarea> 
				            	<input type="submit" name="">
				            	
				            </form>
				         </div>
				        
		
		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destination</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from </p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<?php
						getplace();
				?>
				
					</div>
			</div>
		</div>


		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Recent Blog</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries </p>
					</div>
				</div>
				<div class="blog-flex">
					<div class="f-entry-img" style="background-image: url(images/blog-3.jpg);">
					</div>
					<div class="blog-entry aside-stretch-right">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-3.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>this Bride looks beautiful at light for it's light decoration</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>How These 5 People Found The Path to Their Dream Trip</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Top Travellers</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">						
						<div class="owl-carousel2">
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person1.jpg);"></span>
									<span class="user">Tajnuva</span>
									<small>Dhaka,Bangladesh</small>
									<blockquote>
										<p>" ভারতের মেঘালয় পাহাড় থেকে উৎপত্তি হওয়া জাদুকাটা নদীটি সুনামগঞ্জের একটি অপরূপ নদী। বর্ষাকালে এই নদীটি অনেক প্রশস্ত হয়ে যায়। শীতকালে বেড়াতে গেলে মাইল জুড়ে বিস্তৃত বালুময় তীর দেখে বর্ষাকালে নদীটির উন্মত্ততা সম্পর্কে আপনি ধারনা পেয়ে যাবেন।</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person2.jpg);"></span>
									<span class="user">Shahriar Swapnil</span>
									<small>Faridpur, Dhaka</small>
									<blockquote>
										<p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony text-center">
									<span class="img-user" style="background-image: url(images/person3.jpg);"></span>
									<span class="user">Abdullah Al rifat</span>
									<small>Madaripur,Dhaka</small>
									<blockquote>
										<p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>

				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by TravelMates</a>
						
						</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- <script type="text/javascript">
		
		$('.date').datepicker({
    format: 'yyyy/mm/dd',
    startDate: '-3d'
})
	</script> -->
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal


// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// Plugin options and our code

window.onclick = function(event) {
  if (event.target == modal) {
    myModal.style.display = "none";
  
  }
}
$(function() {
		// Calling Login Form
		$("#login_form").click(function() {
				$(".social_login").hide();
				$(".user_login").show();
				return false;
		});

		// Calling Register Form
		$("#register_form").click(function() {
				$(".social_login").hide();
				$(".user_register").show();
				$(".header_title").text('Register');
				return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function() {
				$(".user_login").hide();
				$(".user_register").hide();
				$(".social_login").show();
				$(".header_title").text('Login');
				return false;
		});
});

</script>

<script type="text/javascript">
	
	var password = document.getElementById("pass")
  , confirm_password = document.getElementById("cpass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
	</body>
</html>

