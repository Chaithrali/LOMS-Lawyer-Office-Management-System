<?php
define('DIR', '../');
require_once DIR . 'config.php';
$admin= new Admin();
$control = new Controller(); 

$uid=$_SESSION['uid'];
$stmt=$admin->ret("SELECT * FROM bill where u_id=".$uid);

$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>

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
                          <form action="../controller/billpayment.php" method="POST"enctype="multipart/form-data">
                                    <div class="card-body card-block">
                                       

                                       

                                         <div class="form-group">
                                            <label for="company" class=" form-control-label">Bill No</label>
                                          
                                            <input type="text" id="company" required="" name="billno" value="<?php echo $row['bill_no'];?>" readonly="true"   placeholder="Enter the Bill No"class="form-control">
                                            <input type="hidden" name="id" value="<?php echo $row['u_id'];?>">
                                            <input type="hidden" name="caseid" value="<?php echo $row['caseid'];?>">

                                            <input type="hidden" name="bill_id" value="<?php echo $row['bill_id'];?>">
                                        </div>
                                          
                                            
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">DueAmount</label>
                                            <input type="text" id="company" required="" name="due_amt" value="<?php echo $row['due_amt'];?>" readonly="true"  placeholder="Enter the DueAmount"class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <span>Payment Method</span>
                                        <label for="chkYes">
                                            <input type="radio" id="chkYes" name="chkPassPort" value="Card" />
                                           Card 
                                        </label>
                                        <label for="chkNo">
                                            <input type="radio" id="chkNo" name="chkPassPort" value="Cash" />
                                            Cash
                                        </label>
                                        </div>
                                        <hr />
                                        <div class="form-group">
                                        <div id="dvPassport" style="display: none">
                                            Card Holder Name:
                                            <input type="text" class="form-control" name="chname" pattern="[A-Za-z\s]+" required="" id="txtPassportNumber" />
                                             Card Number:
                                            <input type="text" class="form-control" name="cno" pattern="[0-9]{12}" title="only numbers" required="" id="txtPassportNumber" />
                                             CVV:
                                            <input type="password" class="form-control" name="cvv" pattern="[0-9]{3}" required="" id="txtPassportNumber" />
                                             EXP DATE:
                                            <input type="date" class="form-control" name="expdate" id="txtPassportNumber" />
                                        </div>
                                        </div>



                                        </div>
                                       
                                         <div class="container-login100-form-btn"style="margin-left:300px;">
                                            <button type="submit" class="btn btn-primary"  name="billpay">
                                            MakePay
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

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name='chkPassPort']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>
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
