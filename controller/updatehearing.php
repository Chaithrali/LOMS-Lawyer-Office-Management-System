<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['addhearing'])) {
	# code...

	$id=$_POST['id'];
	// $caseid=$_POST['caseid'];

	$caseid=$_POST['caseid'];
	$clientname=$_POST['clientname'];
	$associate=$_POST['associate'];
	$casestage=$_POST['casestage'];
	$hearingdate=$_POST['hearingdate'];
	$courtname=$_POST['courtname'];
	
	// $photo=$_POST['photo'];
	
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	// move the image into college folder
   
	$stmt=$admin->edit_data6("addhearing","caseid","clientname","associate","casestage","hearingdate","courtname",$caseid,$clientname,$associate,$casestage,$hearingdate,$courtname,"hearingid",$id);
	echo "<script>alert('registered Successfully');window.location='../admin/CoolAdmin-master/viewhearing.php';</script>";
}

?>