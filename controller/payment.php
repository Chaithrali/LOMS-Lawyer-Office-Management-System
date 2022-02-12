<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
// $cid=$_SESSION['uid'];

if (isset($_POST['addpay']))
 {
	# code...
	$id=$_POST['id'];
	$bill_no=$_POST['transno'];
	
	$date=date('y-m-d');
	// $filename=$_POST['filename'];
	// $filepath=$_POST['filepath'];
	$stmt=$admin->ret("INSERT INTO `payment`(`caseid`, `date`, `transactionno`,`status`) VALUES ('".$id."','".$date."','".$bill_no."','Confirmed')");
	
	// $stmt=$admin->ret("UPDATE `payment` SET status`='Confirmed' WHERE paymentid=".$pid);

	$stmt=$admin->ret("UPDATE `bill` SET status`='Paid' WHERE bill_no=".$bill_no);


	echo "<script>alert('Added Successfully');window.location='../admin/CoolAdmin-master/viewbill.php';</script>";
}

?>