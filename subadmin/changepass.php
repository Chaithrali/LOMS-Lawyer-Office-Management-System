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
	$id=$_SESSION['id'];
   $table='job_seeker';
	$pass=$_POST['pass'];
	//$pass2=$_POST['pass2'];

    $stmt=$admin->edit_data1($table,'password',$pass,'',$id);

  echo '<script>alert("Your password has been changed");window.location="../login.php";</script>';


}

?>