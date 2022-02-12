<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['ADD'])) {
	# code...
	$id=$_POST['id'];
	$lawyer_name=$_POST['lawyer_name'];
	$lawyer_name=$_POST['lawyer_name'];
	$user_name=$_POST['user_name'];
	// $subject=$_POST['subject'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	// $status=$_POST['status'];
	
	// $photo=$_POST['photo'];
	
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	// move the image into college folder
   
	$stmt=$admin->edit_data4("associate","lawyer_name","user_name","email","contact",$lawyer_name,$user_name,$email,$contact,"associateid",$id);
	echo "<script>alert('added Successfully');window.location='../admin/CoolAdmin-master/viewassociates.php';</script>";
}

?>