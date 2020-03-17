<!DOCTYPE html>
<html lang="en">
<head>
	<title>Teacher Register </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="POST" enctype="multipart/form-data" action="{{url('registerTe')}}">
				{{csrf_field()}}
				<span class="login100-form-title p-b-37">
					Teacher Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "firstname">
					<input class="input100" type="text" name="First_name" placeholder="Enter Firstname">
					<span class="focus-input100"></span>
				</div> 

				<div class="wrap-input100 validate-input m-b-25" data-validate = "lastname">
					<input class="input100" type="text" name="Last_name" placeholder="Enter Lastname">
					<span class="focus-input100"></span>
				</div> 

				

				<div class="wrap-input100 validate-input m-b-25" data-validate = "address">
					<input class="input100" type="text" name="Address" placeholder="Enter Address">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="email">
					<input class="input100" type="text" name="Email" placeholder="Enter email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="dateofbirth">
					<input class="input100" type="date" name="Dob" placeholder="Date of birth">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="mobile">
					<input class="input100" type="text" name="Mobile_No" placeholder="Mobile no">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "password">
					<input class="input100" type="password" name="Password" placeholder="Enter password">
					<span class="focus-input100"></span>
				</div>

							
				<div class="wrap-input100 validate-input m-b-25" data-validate = "password">
					<input class="input100" type="file" name="Qualification" placeholder="Enter Qualification">
					<span class="focus-input100"></span>
				</div>

				
				<div class="wrap-input100 validate-input m-b-25" data-validate = "password">
					<input class="input100" type="file" name="image" placeholder="Enter Qualification">
					<span class="focus-input100"></span>
				</div>

				
				

				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div> 

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

			

				
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>