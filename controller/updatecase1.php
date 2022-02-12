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

	// $target_dir = "../uploads/";
 //   // $image = $target_dir.basename($_FILES["image"]["name"]);
 //   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	// $casedetail = $_FILES['casedetail']['name'];
 //    $image_name_tmp = $_FILES['casedetail']['tmp_name'];
 //    move_uploaded_file($image_name_tmp, "../uploads/$casedetail");

	
	// $photo=$_POST['photo'];
	
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	// move the image into college folder
   
	$stmt=$admin->ret("UPDATE `addcase` SET `caseid`='".$caseid."',`clientname`='".$clientname."',`casesubject`='".$casesubject."',`casedetail`='".$casedetail."',`associate`='".$associate."',`party_type`='".$party_type."' WHERE cid=".$id);
	echo "<script>alert('alterered Successfully');window.location='../subadmin/viewcase.php';</script>";
}

?>