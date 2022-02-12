<?php
define ('DIR','../../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (!isset($_SESSION['admin'])) {
    # code...
    header("location:index.php");
}

$id=$_GET['id'];

$stmt=$admin->ret("UPDATE `payment` SET `status`='Confirmed' WHERE paymentid=".$id);
echo "<script>alert('confirmed Successfully');window.location='viewpayment.php';</script>"; 
?>
