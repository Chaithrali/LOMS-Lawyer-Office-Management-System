<?php 

define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 



   $id=$_GET['id'];
   // echo $id;
   $res=$admin->delete('addcase','cid',$id);
  
     echo "<script>alert('successfully deleted');window.location='viewcase.php';</script>";
?>
