<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['addcase'])) {
	# code...

	$id=$_POST['id'];
	$caseid=$_POST['caseid'];
	$clientname=$_POST['clientname'];
	$casedetail=$_POST['casedetail'];
	$casesubject=$_POST['casesubject'];
	$associate=$_POST['associate'];
	$party_type=$_POST['party_type'];
	$stmt=$admin->ret("UPDATE `addcase` SET `caseid`='".$caseid."',`clientname`='".$clientname."',`casesubject`='".$casesubject."',`casedetail`='".$casedetail."',`associate`='".$associate."',`party_type`='".$party_type."' WHERE cid=".$id);
	echo "<script>alert('alterered Successfully');window.location='../admin/CoolAdmin-master/viewcase.php';</script>";
}

?>