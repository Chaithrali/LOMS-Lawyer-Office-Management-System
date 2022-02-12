<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (isset($_POST['Register'])) {
	# code...
	$uname=$_POST['uname'];
	$dob=$_POST['dob'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	// $photo=$_POST['photo'];
	$target_dir = "../uploads/";
   // $image = $target_dir.basename($_FILES["image"]["name"]);
   // move_uploaded_file($_FILES["image"]["tmp_name"],basename($_FILES["image"]["name"]));
	$image = $_FILES['image']['name'];
    $image_name_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($image_name_tmp, "../uploads/$image");

    $checkbox1=$_POST['hobbies'];  
	$chk="";  
	foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
    
	// move the image into college folder
   
	$stmt=$admin->add_data8("user","uname","dob","contact","email","password","address","image","hobbies",$uname,$dob,$contact,$email,$password,$address,$image,$chk);
	echo "<script>alert('registered Successfully');window.location='../view.php';</script>";
}

?>