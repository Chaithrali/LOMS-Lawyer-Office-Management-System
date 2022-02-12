<?php 

define('DIR', '../../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
// if (!isset($_SESSION['admin'])) {
//     # code...
//     header("location:index.php");
// }


   $id=$_GET['id'];
   // echo $id;
   $res=$admin->delete('associate','associateid',$id);
  
     echo "<script>alert('successfully deleted');window.location='viewassociates.php';</script>";
?>
