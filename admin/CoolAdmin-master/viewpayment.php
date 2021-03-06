
<?php
define ('DIR','../../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();

if (!isset($_SESSION['admin'])) {
    # code...
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       <?php include "header.php";?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include "sidebar.php";?>   
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include "header1.php";?>
            <!-- END HEADER DESKTOP-->

        
                             <br><h3 class="title-5 m-b-35">Bill</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    </div>
                                </div> 
                               <div class="table table-responsive">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                              
                                                <th>Dueamt</th>
                                                <th>Payment Method</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="example">
    <?php
    $stmt=$admin->ret("SELECT * FROM `payment` INNER JOIN user ON payment.u_id=user.u_id");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        # code...
        echo '<tr>
        <td>'.$row['name'].'</td>
        <td>'.$row['amount'].'</td>
        <td>'.$row['paymentmethod'].'</td>
     
       
        <td>'.$row['date'].'</td>
        <td>'.$row['status'].'</td>'


        ;?>
    
         <td>

     <?php $st=$row['status'];
                        if($st=='Paid')
                        {
                       ?>
                        <a href="confirmpayment.php?id=<?php echo $row['paymentid']; ?>" class="btn btn-success">Confirm</a>
                        <?php }else if($st=='Confirmed'){ ?>
                        <span style="color: red; font-weight: bold;">Confirmed</span>
                      <?php } ?>
                      </td>
        

         <!-- <td><a href="payment.php?id=<?php echo $row['cid']; ?>"><i class="fa fa-rupee"></i>Pay</a></td> -->
         </tr> 
 <?php      
  }

    ?>
</tbody>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                                                    
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="copyright">
                                    <p>Copyright ?? 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
