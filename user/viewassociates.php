<!DOCTYPE html>

<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
?>

<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>View Associates</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
  
        <!-- HEADER MOBILE-->
        <!-- END HEADER MOBILE-->
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include "header.php";?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
      <?php include "sidebar.php";?>
        <!-- MENU SIDEBAR-->
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
             <?php include "header1.php";?>
             <!-- <?php echo "Welcome " .$_SESSION['user'];?> -->
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                             <?php
    $stmt=$admin->showall("associate");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) { 

                            echo '

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">Associate Profile</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">';?>
                                            <img class="rounded-circle mx-auto d-block" src="../uploads/<?php echo $row['image'];?>" alt="Card image cap">
                                          <?php echo'

                                            <h5 class="text-sm-center mt-2 mb-1">'.$row['lawyer_name'].'</h5>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-map-marker"></i> '.$row['address'].'</div>
                                                 <div class="location text-sm-center">
                                                <i class="fa fa-graduation-cap"></i> '.$row['workprofile'].'</div>
                                                 <div class="location text-sm-center">
                                                <i class="fa fa-legal"></i> '.$row['expertise'].'</div>
                                                 <div class="location text-sm-center">
                                                <i class="fa fa-certificate"></i>'.$row['experience'].'</div>
                                                 <div class="location text-sm-center">
                                                <i class="fa fa-phone"></i>'.$row['contact'].'</div>
                                                 <div class="location text-sm-center">
                                                 <i class="fa fa-at"></i>'.$row['email'].'</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">
                                                <i class="fa fa-facebook pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin pr-1"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest pr-1"></i>
                                            </a>
                                        </div>';?>
                                    <BR><a href="appointment.php?id=<?php echo $row['associateid'];?>" class="btn btn-success" style="margin-left:20px;">Appointment</a>
                                    <a href="enquiry.php?id=<?php echo $row['associateid'];?>"class="btn btn-success" style="margin-left:50px;">Enquiry</a>
                                    </div>

                                </div>
                            </div>
                         <?php   } ?>


                            <!-- End -->


                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

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
<!-- end document-->
