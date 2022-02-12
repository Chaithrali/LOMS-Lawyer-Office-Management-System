<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['ADD'])) {
	# code...
	$lawyer_name=$_POST['lawyer_name'];
	$user_name=$_POST['user_name'];
	$workprofile=$_POST['workprofile'];
	// $subject=$_POST['subject'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$expertise=$_POST['expertise'];
	$address=$_POST['address'];
	$experience=$_POST['experience'];

	$target_dir = "../uploads/";
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	$image = $_FILES['image']['name'];
    $image_name_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_name_tmp, "../uploads/$image");
	// $status=$_POST['status'];
	
	// $photo=$_POST['photo'];
	
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	// move the image into college folder
   
	$stmt=$admin->ret("INSERT INTO `associate`(`lawyer_name`, `workprofile`, `image`, `user_name`, `expertise`, `email`, `contact`, `experience`, `address`) VALUES ('".$lawyer_name."','".$workprofile."','".$image."','".$user_name."','".$expertise."','".$email."','".$contact."','".$experience."','".$address."')");
	echo "<script>alert('added Successfully');window.location='../admin/CoolAdmin-master/viewassociates.php';</script>";
}

?>