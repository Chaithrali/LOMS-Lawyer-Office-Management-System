 <?php 
define('DIR', '../../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller();  

$search = $_GET['q'];

//$result="SELECT * FROM `register` where rname like '".$searchq."%' or city like '".$searchq."%'" ;
$stmt=$admin->Search1("addhearing","clientname",$search);
//$data=mysqli_query($conn,$result);



					echo '<tbody>';
						while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		# code...
	echo '<tbody';
	echo '<tr>
	 <td>'.$row['hearingid'].'</td>
        <td>'.$row['caseid'].'</td>
        <td>'.$row['clientname'].'</td>
        <td>'.$row['associate'].'</td>
        <td>'.$row['casestage'].'</td>
        <td>'.$row['hearingdate'].'</td>
        <td>'.$row['courtname'].'</td>
	';?>
					 <td><a href="delhearing.php?hid=<?php echo $row['hearingid']; ?>" onclick="return confirm('are you sure');" class="btn btn-danger">Delete</a></td>
                        
        <td><a href="updatehearing.php?hid=<?php echo $row['hearingid']; ?>" class="btn btn-info">Update</a></td>
         <td><a href="sendnotification.php?id=<?php echo $row['u_id']; ?>" class="btn btn-info"><i class="fa fa-bell"></i>Notification</a></td>
        
          <td><a href="bill.php?id=<?php echo $row['u_id']; ?>&id1=<?php echo $row['cid']; ?>" class="btn btn-info"><i class="fa fa-bell"></i>Bill&Invoice</a></td>
                        </tr> 

					<?php }
					echo '</tbody>';


?>