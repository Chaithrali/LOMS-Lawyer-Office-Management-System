<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
// $cid=$_SESSION['uid'];

if (isset($_POST['sendreply'])) {
	# code...
	$id=$_POST['id'];
	$cid=$_POST['cid'];
	$aid=$_POST['aid'];
	$reply=$_POST['reply'];
	// $date=date('y-m-d');
   
	$stmt=$admin->ret("INSERT INTO `reply`(`enq_id`, `associateid`, `clientid`, `reply`) VALUES ('".$id."','".$aid."','".$cid."','".$reply."')");
	
	$stmt=$admin->ret("UPDATE `enquiry` SET enqstatus='Replied' WHERE enq_id=".$id);

	echo "<script>alert('Message sent Successfully');window.location='../admin/CoolAdmin-master/viewquery.php';</script>";
}

?>