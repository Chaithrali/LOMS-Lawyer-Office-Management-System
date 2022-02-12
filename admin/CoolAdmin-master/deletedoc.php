<?php 

define('DIR', '../../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller();
 



   $id=$_GET['id'];
   // echo $id;
   $res=$admin->delete('document','doc_id',$id);
  
     echo "<script>alert('successfully deleted');window.location='document.php';</script>";
?>
