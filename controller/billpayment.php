<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
// $cid=$_SESSION['uid'];

if (isset($_POST['billpay']))
 {
	# code...
	$bill_id=$_POST['bill_id'];
	$id=$_POST['id'];
	$caseid=$_POST['caseid'];
	$bill_no=$_POST['billno'];
	$due_amt=$_POST['due_amt'];
	$chkPassPort=$_POST['chkPassPort'];
	$chname=$_POST['chname'];
	$cno=$_POST['cno'];
	$cvv=$_POST['cvv'];
	$expdate=$_POST['expdate'];
		
	$date=date('y-m-d');
	
	$stmt=$admin->ret("INSERT INTO `payment`(`u_id`,`caseid`, `date`, `transactionno`,`amount`, `paymentmethod`, `chname`, `cno`, `cvv`, `expdate`, `status`) VALUES ('".$id."','".$caseid."','".$date."','".$bill_no."','".$due_amt."','".$chkPassPort."','".$chname."','".$cno."','".$cvv."','".$expdate."','Paid')");
	
	// $stmt=$admin->ret("UPDATE `payment` SET status`='Confirmed' WHERE paymentid=".$pid);

	$stmt=$admin->ret("UPDATE `bill` SET status='Confirmed' WHERE bill_id=".$bill_id);


	echo "<script>alert('Payment Successfull');window.location='../user/viewpayment.php';</script>";
}

?>