<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
$cid=$_SESSION['uid'];

if (isset($_POST['sendquery'])) {
	# code...
	$id=$_POST['id'];
	$qry=$_POST['qry'];
	// $date=date('y-m-d');
   
	$stmt=$admin->ret("INSERT INTO `enquiry`( `clientid`, `associateid`, `qry`,`enqstatus`) VALUES ('".$cid."','".$id."','".$qry."','Sended')");
	echo "<script>alert(' Message sent Successfully');window.location='../user/viewquery.php';</script>";
}

?>