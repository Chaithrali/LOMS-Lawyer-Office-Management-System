<?php
define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
//$control->isLogged('admin', 'admin/index'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../../Login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Change Password
					</span>
				</div>


	<form method="POST" action="../controller/changepass.php">

					<div class="form-group form-row">
						<label class="col-md-4">New Password</label>
						<input type="password" id="one" name="pass" class="form-control col-md-8" required>
					</div>
                     <input type="hidden" name="id" name="id" value="<?php echo $_SESSION['id']; ?>">
					<div class="form-group form-row">
						<label class="col-md-4">Ensure Password</label>
						<input type="password" id="two" name="sans" class="form-control col-md-8" onchange="match(this.value)" required>
					</div>
				<input type="submit" name="btn" class="col-md-12">
				</form>
				</div>
				</div>
				<div class="col-md-3"></div>
			</div>
	     </div>
<script type="text/javascript">
	function match(str){
		var p1=document.getElementById('one').value;
		if(p1==str){
        //alert('Your password Successfully.');
		
		}else{
        document.getElementById('two').value='';
        alert('Password is not matching.Please try again!!.');
       // document.getElementById('one').value;
		}
	}
</script>
</body>
</html>