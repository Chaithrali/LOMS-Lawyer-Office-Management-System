<?php
define('DIR', '../../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
$caseid=$_GET['id1'];
$u_id=$_GET['id'];
$stmt=$admin->ret("SELECT * FROM user where u_id=".$u_id);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

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

                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Billing</strong>
                                        <small> Form</small>
                                    </div>
                          <form action="../../controller/bill.php" method="POST"enctype="multipart/form-data">
                                    <div class="card-body card-block">
                                          <div class="form-group">
                                            <label for="company" class=" form-control-label">CaseId</label>
                                          
                                            <input type="text" id="company" required="" name="caseid" value="<?php echo $caseid;?>"   placeholder="Enter the Bill No"class="form-control">
                                        </div>
                                         <div class="form-group">
                                            <label for="company" class=" form-control-label">Client Name</label>
                                            <input type="text" id="company" required="" name="u_name" value="<?php echo $row['name'];?>"   placeholder="Enter the Bill No"class="form-control">

                                            <input type="hidden" id="company" required="" name="u_id" value="<?php echo $u_id;?>"   placeholder="Enter the Bill No"class="form-control">
                                        </div>
                                            <div class="form-group">
                                            <label for="company" class=" form-control-label">Bill No</label>
                                          
                                            <input type="text" id="company" required="" name="billno"   placeholder="Enter the Bill No"class="form-control">
                                        </div>

                                        <!--  <div class="form-group">
                                            <label for="company" class=" form-control-label">Bill No</label>
                                          
                                            <input type="text" id="company" required="" name="billno"   placeholder="Enter the Bill No"class="form-control">
                                        </div> -->
                                          
                                            
                                            <div class="form-group">
                                            <label for="company" class=" form-control-label">DueAmount</label>
                                            <input type="text" id="company" required="" name="due_amt"   placeholder="Enter the DueAmount"class="form-control">
                                        </div>
                                        </div>
                                       
                                         <div class="container-login100-form-btn"style="margin-left:300px;">
                                            <button type="submit" class="btn btn-primary"  name="addbill">
                                            ADD
                                            </button>
                                             <div class="container-login100-form-btn"style="margin-top:-37px;margin-right:150px;margin-left:150px;">
                                             <button type="reset" class="btn btn-primary"  name="reset">
                                                RESET
                                            </button></div>
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
