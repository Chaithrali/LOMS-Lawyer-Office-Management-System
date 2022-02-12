<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
// $cid=$_SESSION['uid'];

if (isset($_POST['sendnote'])) {
	# code...
	$id=$_POST['id'];
	
	$aid=$_POST['aid'];
	$message=$_POST['message'];
	$date=date('y-m-d');
   
	$stmt=$admin->ret("INSERT INTO `notification`(`clientid`, `associateid`, `message`, `date`) VALUES ('".$id."','".$aid."','".$message."','".$date."')");
	echo "<script>alert('Message sent Successfully');window.location='../admin/CoolAdmin-master/viewhearing.php';</script>";
}

?>