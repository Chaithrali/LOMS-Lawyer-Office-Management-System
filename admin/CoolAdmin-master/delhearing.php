<?php 

define('DIR', '../../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 

// if (!isset($_SESSION['admin'])) {
//     # code...
//     header("location:index.php");
// }


   $id=$_GET['hid'];
   // echo $id;
   $res=$admin->delete('addhearing','hearingid',$id);
  
     echo "<script>alert('successfully deleted');window.location='viewhearing.php';</script>";
?>
