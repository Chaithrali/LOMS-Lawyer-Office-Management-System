
<?php
define ('DIR','../');
require_once DIR .'config.php';
$admin=new Admin();
$control=new Controller();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Equipment Details</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <!-- Navbar -->
  <!-- Navbar -->
   <?php include "header.php";?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include "sidebar.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
       <!--  <input class="form-control form-control-navbar"   type="search" placeholder="Search" aria-label="Search"> -->
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <!-- <i class="fas fa-search"></i> -->
          </button>
        </div>
      </div>
    </form>
             <!--  <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Equipment Details</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->
         <div class="card card-info" style="height:100%;width:80%;">
              <div class="card-header"style="margin-right:20px;">
                <h3 class="card-title"><b>Equipment Details</b></h3>
              </div>
          <div class="card">
            <!-- <div class="card-header"> -->
              

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <!-- <th>Equipment ID</th> -->
                  <th>Name</th>
                  <th>Crop</th>
                  <th>Image</th>
                  <th>Rent</th>
                  <th>Location</th>
                  <th colspan="2" style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
  $stmt=$admin->ret("SELECT * FROM consumer,bid RIGHT JOIN crop on bid.cropid=crop.cropid WHERE consumer.cid=bid.cid");
  while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
    # code...
    echo '<tr>
    
    <td>'.$row['cname'].'</td>
    <td>'.$row['cropname'].'</td>
     '
    ;?>
    <td><img src="../uploads/<?php echo $row['image'] ?>" style="width: 50px;"></td>
    <!-- <td>'.$row['image'].'</td> -->
    <?php echo '
    <td>'.$row['bidamount'].'</td>
    <td>'.$row['biddate'].'</td>
        
    ';?>
    <td>

     <?php $st=$row['status'];
                        if($st=='Bidded')
                        {
                       ?>
                        <a href="confirmbidcropdetails.php?id=<?php echo $row['bidid']; ?>" class="btn btn-success">Confirm</a>
                        <a href="cancelbidcropdetails.php?id=<?php echo $row['bidid']; ?>" onclick="return confirm('Sure to cancel the appointment?'); " class="btn btn-warning">Reject</a>
                      <?php }else if($st=='Confirmed'){ ?>
                        <span style="color: green; font-weight: bold;">Confirmed </span>
                      <?php }else if($st=='Cancelled'){ ?>
                        <span style="color: red; font-weight: bold;">Cancelled</span>
                      <?php } ?>
                      </td>

    <!-- <td><a href="cancelbidcropdetails.php?id=<?php echo $row['bidid']; ?>" onclick="return confirm('Are you sure');" class="btn btn-danger"><i class="fas fa-thumbs-down"></i></a></td> -->
            
    <!-- <td><a href="confirmbidcropdetails.php?id=<?php echo $row['bidid']; ?>" class="btn btn-info"><i class="fas fa-thumbs-up"></i></a></td> -->
        
        </tr> 
<?php }

  ?>
                
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      </div>
    <strong>Copyright &copy; 2019-2020 shwetha saksha shreya .</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
