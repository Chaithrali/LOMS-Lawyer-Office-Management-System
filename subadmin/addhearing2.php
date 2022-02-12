<?php
define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 
$id=$_GET['id'];
$id2=$_GET['id2'];
$stmt=$admin->show_id("addcase","cid",$id);
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

                        <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>CaseEntry</strong>
                                        <small> Form</small>
                                    </div>
                          <form action="../controller/addhearing1.php" method="POST">
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Case_Id</label>
                                            <input type="hidden" name="id" value="<?php echo $row['cid'];?>">
                                            <input type="hidden" name="id2" value="<?php echo $row['u_id'];?>">
                                            <input type="text" id="company" required="" name="caseid" value="<?php echo $row['caseid'];?>" placeholder="CC3107/2017" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Client Name</label>
                                            <input type="text" id="vat" required="" name="clientname" value="<?php echo $row['clientname'];?>" placeholder="Enter the client name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Associate</label>
                                            <select name="associate" class="form-control" required="">
                                                            <option>-SELECT-</option>
                                                            <option value="<?php echo $row['associate'];?>">Mr.Prakash K</option>
                                                            <option value="<?php echo $row['associate'];?>">Mrs.Jayashree Devadiga</option>
                                                        </select>
                                           <!--  <input type="text" id="street" placeholder="Enter the associate" class="form-control"> -->
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">Case Stage</label>
                                                     <select name="casestage" class="form-control" required="">
                                                            <option>-SELECT-</option>
                                                            <option>AwaitReport</option>
                                                            <option>Objection</option>
                                                            <option>Reply</option>
                                                            <option>Payment</option>
                                                            <option>Settlement</option>
                                                            <option>Evidence</option>
                                                            <option>313Statment</option>
                                                            <option>FurtherChief</option>
                                                            <option>Compliance</option>
                                                        </select>
                                                    <!-- <input type="text" id="city" placeholder="Enter the stage" class="form-control"> -->
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Hearing Date</label>
                                                    <input type="date" id="postal-code" required="" name="hearingdate" placeholder="Enter the hearing date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Court Name</label>
                                            <input type="text" id="country" required="" name="courtname" placeholder="Enter the court name" class="form-control">
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
