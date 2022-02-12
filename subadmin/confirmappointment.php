<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

$id=$_GET['id'];

$stmt=$admin->ret("UPDATE `appointment` SET `status`='Confirmed' WHERE appid=".$id);
echo "<script>alert('confirmed Successfully');window.location='viewappointment.php';</script>"; 
?>
