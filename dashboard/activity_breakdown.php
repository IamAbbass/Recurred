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

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<style>

.sent{
  width: 81px;
  background-color: green;
  color: white;
}

.recieved{
  width: 81px;
  background-color: transparent;
  color: green;
}

.pending{
  width: 81px;
  background-color: transparent;
  color: orange;
}
.filter{

    margin-left: 450px;
    background-color: transparent;
    border: 1px solid;
    margin-top: 10px;

}
#activity{
  margin-left: 5px;
  margin-top: 10px;
}
#new{
  margin-right: 5px;
  margin-top: 10px;
}
.main{
  background-color: purple;
}
.table-responsive{
  background-color: white;
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


          <!-- Page Heading -->
          <div class="main">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-white-800" id="activity">Activity Breakdown</h1>
          <a href="#" class="filter btn-sm btn-primary "><i class="fas fa-filter"></i>  Filter</a>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="new"><i class="fas fa-download fa-sm text-white-50"></i> + New</a>
        </div>

          <!-- Page Heading -->

          <!-- DataTales Example -->


          <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
          <th>Name</th>
          <th>Address</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
        </thead>

                    <tbody>
                    <tr>
                      <td>Fred Kennedy</td>
                      <td>mohr.aida@yahoo.com</td>
                      <td>3 ETH</td>
                      <td> <button type="button" class="sent" >Sent</button> </td>
                      <td>10 Oct, 18</td>

                    </tr>
                    <tr>
                      <td>Gertrude Tate</td>
                      <td>lavern.schoen@orn.biz</td>
                      <td>3 ETH</td>
                      <td> <button type="button" class="recieved" >Recieved</button></td>
                      <td>10 Oct, 18</td>

                    </tr>
                    <tr>
                      <td>Eunice Thornton</td>
                      <td>ciara_gutmann@michele.biz</td>
                      <td>3 ETH</td>
                      <td> <button type="button" class="pending" >Pending</button></td>
                      <td>10 Oct, 18</td>

                    </tr>
                    <tr>
                      <td>Willie Huff</td>
                      <td>fritsch.noemy@hotmail.com</td>
                      <td>3 ETH</td>
                      <td> <button type="button" class="sent" >Sent</button></td>
                      <td>10 Oct, 18</td>

                    </tr>
                    <tr>
                      <td>Teresa Wade</td>
                      <td>schneider_vilma@johns.name</td>
                      <td>3 ETH</td>
                      <td> <button type="button" class="recieved" >Recieved</button></td>
                      <td>10 Oct, 18</td>

              </tr>
              </tbody>
              </table>
              </div>
              </div>
        <!-- /.container-fluid -->





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
