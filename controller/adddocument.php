<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
// $cid=$_SESSION['uid'];

if (isset($_POST['adddocument'])) {
	# code...
	$id=$_POST['cid'];
	$doctype=$_POST['doctype'];
	// $filename=$_POST['filename'];
	$filepath=$_POST['filepath'];
	$stmt=$admin->ret("INSERT INTO `document`(`cid`, `doctype`,`filepath`) VALUES ('".$id."','".$doctype."','".$filepath."')");
	echo "<script>alert('Added Successfully');window.location='../admin/CoolAdmin-master/document.php';</script>";
}

?>