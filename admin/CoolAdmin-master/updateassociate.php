<?php
define('DIR', '../../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 

if (!isset($_SESSION['admin'])) {
    # code...
    header("location:index.php");
}

$id=$_GET['id'];

$stmt=$admin->show_id("associate","associateid",$id);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <title>Forms</title>

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
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       <?php include "header.php";?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include "sidebar.php";?>        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <!-- HEADER DESKTOP-->
            <?php include"header1.php";?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                        <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>AssociateEntry</strong>
                                        <small> Form</small>
                                    </div>
                          <form action="../../controller/updateassociate.php" method="POST">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">LawyerName</label>
                                            
                                            <input type="text" id="company" name="lawyer_name" value="<?php echo $row['lawyer_name'];?>"  placeholder="Enter the lawyer name"class="form-control">
                                            <input type="hidden" name="id" value="<?php echo $row['associateid'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">User Name</label>
                                            <input type="text" id="vat" name="user_name" value="<?php echo $row['user_name'];?>" placeholder="Enter the user name" class="form-control">
                                        </div>
                                        
                                       
                                       
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Email</label>
                                                    <input type="text" id="postal-code"name="email" placeholder="Enter the email-id" class="form-control">
                                                </div>
                                          
                                     
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Contact</label>
                                            <input type="text" id="country" name="contact" placeholder="Enter the contact number" class="form-control">
                                        </div>
                                         <div class="container-login100-form-btn">
                                            <button type="submit" class="btn btn-primary"  name="ADD">
                                            ADD
                                            </button>
                                             <button type="reset" class="btn btn-primary"  name="reset">
                                                Reset
                                            </button>
                        <!-- <a href="index.php" class="login100-form-btn">Login</a> -->
                        
                                        </div>
                                    </div>
                                    </form>
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
<!-- end document-->
