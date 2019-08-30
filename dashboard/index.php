<?php

  require("pages/header.php");
  require("pages/title.php");
  require("pages/menu.php");
  require("pages/footer.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style>
.main{
    width: 100%;
    height: 100%;
    margin-left: 15px;
}

.col-sm-4 {
    border: 1px solid;
}

.col-sm-8 {
    border: 1px solid;
}

.col-sm-7 {
    border: 1px solid;
}

.col-sm-5 {
    border: 1px solid;
}

.col-sm-6 {
    border: 1px solid;
}
#s_f{
  margin-top:10px;
}
#chart
{
   display: block;
   width: 150px;
   height: 180px;
   margin-top: 50px;
}



</style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php echo $menu; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->


        <!-- Topbar -->
        <?php echo $header; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="main">
        <div class="row">
        <div class="col-sm-4">
          <h3>Column 1</h3>

      </div>

      <div class="col-sm-8">
        <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                  </div>
        <div class="row">
        <div class="col-sm-6">
        <div class="chart-pie pt-4" id="chart">
        <canvas id="myPieChart" class="pie"></canvas>
        </div>
        </div>
          <div class="col-sm-6">col-sm-6</div>

      </div>
    </div>
      </div>

      <div class="row" id="s_f">
        <div class="col-sm-7">
          <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>

        </div>

        <div class="col-sm-5">
          <h3>Column 1</h3>

        </div>

      </div>
      </div>



      <!-- Footer -->
      <?php echo $footer; ?>
      <!-- End of Footer -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
