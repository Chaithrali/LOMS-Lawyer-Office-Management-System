<?php
define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
//$control->isLogged('admin', 'admin/index'); 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body >
		<div class="row">
			<div class="col-md-2"></div>
				<div class="col-md-4" style="background-image: url('../images/newpass.jpg');">
					
				</div>
			<div class="card col-md-4">
			<div class="card-header badge-info">
				<center>Recover Password</center>
			</div>

	<form method="POST" action="Controller/changepass.php">

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