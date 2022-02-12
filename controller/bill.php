<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
// $cid=$_SESSION['uid'];

if (isset($_POST['addbill']))
 {
	# code...
	$id=$_POST['caseid'];
	$u_id=$_POST['u_id'];
	$bill_no=$_POST['billno'];
	$due_amt=$_POST['due_amt'];
	$date=date('y-m-d');
	$u_id=$_POST['u_id'];
	// $filename=$_POST['filename'];
	// $filepath=$_POST['filepath'];
	$stmt=$admin->ret("INSERT INTO `bill`(`u_id`,`caseid`, `bill_no`, `due_amt`, `date`) VALUES ('".$u_id."','".$id."','".$bill_no."','".$due_amt."','".$date."')");
	echo "<script>alert('Added Successfully');window.location='../admin/CoolAdmin-master/viewbill.php';</script>";
}

?>