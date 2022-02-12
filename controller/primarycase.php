<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['addcase'])) {
	# code...
	$id=$_POST['id'];
	$clientname=$_POST['clientname'];
	// $casedetail=$_POST['casedetail'];
	$casesubject=$_POST['casesubject'];
	$associate=$_POST['associate'];
	


	$target_dir = "../uploads/";
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	$casedetail = $_FILES['casedetail']['name'];
    $image_name_tmp = $_FILES['casedetail']['tmp_name'];
    move_uploaded_file($image_name_tmp, "../uploads/$casedetail");

	
	// $photo=$_POST['photo'];
	
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	// move the image into college folder
   
	$stmt=$admin->add_data5("addcase","u_id","clientname","casedetail","casesubject","associate",$id,$clientname,$casedetail,$casesubject,$associate);
	echo "<script>alert('registered Successfully');window.location='../user/userindex.php';</script>";
}

?>