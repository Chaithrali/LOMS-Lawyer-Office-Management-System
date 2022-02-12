<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
$cid=$_SESSION['uid'];

if (isset($_POST['addappointment'])) {
	# code...
	$id=$_POST['id'];
	$title=$_POST['title'];
	$date=date('y-m-d');
   
	$stmt=$admin->ret("INSERT INTO `appointment`(`clientid`, `associateid`, `title`, `date`) VALUES ('".$cid."','".$id."','".$title."','".$date."')");
 echo "<script>alert('added Successfully');window.location='../user/viewappointment.php';</script>";
}

?>