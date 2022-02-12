<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['ADD'])) {
	# code...
	$cid=$_POST['id'];
	$id2=$_POST['id2'];
	$caseid=$_POST['caseid'];

	$clientname=$_POST['clientname'];
	$casestage=$_POST['casestage'];
	$associate=$_POST['associate'];
	$hearingdate=$_POST['hearingdate'];
	$courtname=$_POST['courtname'];
	// $photo=$_POST['photo'];
	
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	// move the image into college folder
   
	$stmt=$admin->add_data8("addhearing","cid","u_id","caseid","clientname","casestage","associate","hearingdate","courtname",$cid,$id2,$caseid,$clientname,$casestage,$associate,$hearingdate,$courtname);
	// echo "<script>alert('registered Successfully');window.location='../view.php';</script>";
	echo "<script>alert('registered Successfully');window.location='../admin/CoolAdmin-master/viewhearing.php';</script>";
}

?>