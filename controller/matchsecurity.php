<?php
define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
//$control->isLogged('admin', 'admin/index'); 

?>
<?php
if (isset($_POST['btn'])) {
	# code.
	$email=$_POST['email'];
	$sq=$_POST['sqsn'];
	$sa=$_POST['sans'];
	//$date=$_POST['date'];
	//$c_id=$_POST['coordinator'];
	$stmt=$admin->ret('select * from subadmin where email="'.$email.'" and sqsn="'.$sq.'" and sans="'.$sa.'"');
	$rc=$stmt->rowCount();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rc>0){
		$_SESSION['id']=$row['advocate_id'];
  echo '<script>alert("You can change your password now");window.location="../subadmin/newpass.php";</script>';
	}else{
  echo '<script>alert("Sorry!! please try again");window.location="../subadmin/forgotpass.php";</script>';
		
	}
}

?>