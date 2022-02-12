<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						RESET PASSWORD
					</span>
				</div>

	<form method="POST" action="../controller/matchsecurity.php">

						
					<div class="form-group form-row">
						<label class="col-md-4">Email</label>
						<input type="email" name="email" placeholder="enter the email" class="form-control col-md-8">
					</div>

					<div class="form-group form-row">
						<label class="col-md-4">Security Question</label>
						<select name="sqsn" class="form-control col-md-8">
							<option value="1">What is Your nick name?</option>
							<option value="2">What is Your pet's name?</option>
							<option value="3">What is Your lucky number?</option>

						</select>
					</div>

					<div class="form-group form-row">
						<label class="col-md-4">Security Answer</label>
						<input type="text" name="sans" class="form-control col-md-8">
					</div>
				<div>
					<input class="login100-form-btn" type="submit" name="btn">
				</div>
				</form>
				</div>
				</div>
				<div class="col-md-3"></div>
			</div>
	     </div>

</body>
</html>