<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">

<style type="text/css">
      * {box-sizing: border-box}
/*-------------------------------Full-width input fields----------------------------- */
  input[type=text], input[type=password] 
  {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
  input[type=text]:focus, input[type=password]:focus 
  {
    background-color: #ddd;
    outline: none;
  }
  hr 
  {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
/* ---------------------------------Set a style for all buttons -----------------------------*/
  button
  {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%
    opacity: 0.9;
  }
  button:hover 
  {
    opacity:1;
  }
/*---------------------------------- Extra styles for the cancel button ------------------------------*/
 .cancelbtn 
  {
   padding: 14px 20px;
   background-color: #f44336;
  }
/*-------------------------------- Float cancel and signup buttons and add an equal width --------------------*/
 .cancelbtn, .signupbtn 
  {
   float: left;
   width: 50%;
  }
/*-------------------------------------- Add padding to container elements ------------------------------------*/
 .container 
  {
    padding: 16px;
  }
/*----------------------------------------------------- Clear floats ---------------------------------------------*/
  .clearfix::after
  {
    content: "";
    clear: both;
    display: table;
  }
/*------------------------- Change styles for cancel button and signup button on extra small screens----------------*/
@media screen and (max-width: 300px) 
{
  .cancelbtn, .signupbtn 
  {
   width: 100%;
  }
  
</style>
  
</head>
<body>

  <form action="action_page.php" style="border:1px solid #ccc">

      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">

            <div class="login100-pic js-tilt" data-tilt>
                 <img src="images/img-01.png" alt="IMG">
            </div>

      <form class="login100-form validate-form">

        <span class="login100-form-title">Member Login</span>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="email" placeholder="Email">

            <span class="focus-input100"></span>
            <span class="symbol-input100">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
                            </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="#">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>

        </form>
      </div>
    </div>
  </div>
  
</form> 



</body>

</html>
