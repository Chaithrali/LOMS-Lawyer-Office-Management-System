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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                               <!--  <h3 class="title-5 m-b-35">data table</h3> -->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All</option>
                                                <option>All</option>
                                                <?php
                                                    $stmt=$admin->ret("select * from addhearing");

                                                ?>
                                                <!-- <option value="">Option 2</option> -->
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <i class="fas fa-search"></i>
                                        <div class="rs-select2--light rs-select2--lg" >
                                           <input type="text" name="search" class="form-control" placeholder="Enter Name for search" onkeyup="searchit(this.value)">
                                            
                                        </div>
                                        <!-- <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button> -->
                                    </div>
                                    <div class="table-data__tool-right">
                                        <!-- <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button> -->
                                        <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div> -->
                                    </div>
                                </div>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-responsive table-bordered" bordercolor="black"; bgcolor="black";>
                                        <thead>
                                            <tr>
                                                <th>Hearing_Id</th>
                                                <th>Case_Id</th>
                                                <th>Client_Name</th>
                                                <th>Associate</th>
                                                <th>Case_Stage</th>
                                                <th>Hearing_Date</th>
                                                <th>Court_Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="example">

<?php
    $stmt=$admin->showall("addhearing");
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        # code...
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
<?php   }

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
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example').DataTable();
                    } );
                </script>
<script type="text/javascript">                 
function searchit(str) {
   // alert(str);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("example").innerHTML = this.responseText;
               // alert(this.responseText);
            }
        };
        xmlhttp.open("GET", "Searchresult.php?q=" + str, true);
        xmlhttp.send();
}
</script>

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
