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
  border-color: transparent;
  margin-left: 20px;

}

.recieved{
  width: 81px;
  background-color: transparent;
  color: green;
  margin-left: 20px;
}

.pending{
  width: 81px;
  background-color: transparent;
  color: orange;
  margin-left: 20px;

}
.filter{


    background-color: transparent;
    border: 1px solid;
    margin-top: 10px;
    color: grey;

}
#activity{
  margin-left: 5px;
  margin-top: 10px;
}
#new{
  margin-right: 5px;
  margin-top: 10px;
  background-color: white;
  color: grey;
}
.main{
  background-image: url("img/background.png");
  height: 100%;


}
.table-responsive{
  background-color: white;
}
.input-group {
    width: 30%;
    margin-left: 5px;
    margin-bottom: 20px;
}
.go {
    width: 100px;
    text-align: center;
    border-radius: 15px;
    margin-top: 5px;
    border: 2px solid;
}
.nov{
    margin-top: 5px;
    color: grey;
    background-color: transparent;
    border: 2px solid;
}

.november{
  margin-left: 200px;
  margin-top: 5px;
  color: grey;
  background-color: transparent;
  border: 2px solid;
}
label{
  color: black;
}
#details{
    width: 95%;
    margin-left: 10px;
}
.row {
    width: 98%;
    margin-left: 10px;
    border: 2px solid;
    border-radius: 20px;
    height: 50px;
    padding-top: 10px;
    border-color:white;
    background-color: white;
}
#oct{
  padding-left: 50px;
}
#name{
  margin-left: 20px;
  color: white;
}
#address{
  margin-left: 90px;
  color: white
}
#amount{
    color: white
}
#status{
    color: white
}
#date{
    color: white
}
#third{
  margin-left: 10px;
  }
#sender_information{
  margin-top: 10px;
  height: 40%;
}

#jesse{
  margin-left: 0px;
  margin-top: 5px;
  }
#current{
    margin-top: 37px;
    margin-left: 0px;
    color: grey;
  }
#div{
  margin-top: 10px;
}
#transaction{
  color: grey;
}
#type{
  color: grey;
}
#hermann{
  color: grey;
}
#invoice{
    color: grey;
}
#paid{
    color: grey;
}
#current_status{
  margin-left: 10px;
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
          <h1 class="h3 mb-0 text-white-800" id="activity">Transactions</h1>
          <a href="#" class="november btn-sm btn-primary"><i class="fas fa-calendar"></i>  Nov 29, 18</a>
          <a href="#" class="nov btn-sm btn-primary"><i class="fas fa-calendar"></i>  Nov 19, 18</a>
          <a href="#" class="go btn-sm btn-primary "> Go</a>
          <a href="#" class="filter btn-sm btn-primary "><i class="fas fa-filter"></i>  Filter</a>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="new"><i class="fas fa-location-arrow"></i> Export</a>
        </div>

        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search Here..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
          <i class="fas fa-search fa-sm"></i>
        </button>
        </div>
        </div>

          <div class="navbar" id="details">
          <label id="name"> Name</label>
          <label id="address"> Address</label>
          <label id="amount" > Amount</label>
          <label id="status"> Status</label>
          <label id="date"> Date</label>
        </div>

          <div class="row" id="div">
          <div class="col-sm-3">
          <label id="first"><b> Fred Kennedy </b> </label>
      </div>

          <div class="col-sm-3" id="yahoo">
          <label id="second"> mohr.aida@yahoo.com </label>
      </div>

          <div class="col-sm-2">
          <label id="third" > -3 ETH </label>
      </div>

          <div class="col-sm-2">
          <button type="button" name="" class="sent"> Sent </button>
      </div>

        <div class="col-sm-2" id="oct">
        <label id="last">10 Oct,18</label>
    </div>
    </div>

    <div class="row" id="sender_information">
    <div class="col-sm-3">
    <label id="sender"><b> Sender Information </b> </label>
    <label id="jesse"><b> Jesse Love </b> </label>
    <label id="hermann"> hermann.delmar@yahoo.com </label>
    <label id="transaction"> Transaction ID </label>
    <label id=""> 85902-39893202929 </label>
    <label id="type"> Type </label><br>
    <label id=""> Personal </label>
  </div>

  <div class="col-sm-2" id="current_status">
  <label id="current"> Current Status </label>
  <label id="blue"> Sent </label><br>
  <label id="invoice"> Invoice no. </label>
  <label id=""> LS-2019 </label><br>
  <label id="paid"> Paid by </label><br>
  <label id=""> Bitcoin </label>
</div>

  <div class="col-sm-3" id="reciept_information" >
  <label id="reciept"><b> Reciept Information </b> </label>
  <label id="kennedy"><b> Fred Kennedy </b> </label>


</div>

  </div>

  <div class="row" id="div">
  <div class="col-sm-3">
  <label id="first"><b> Gertrude Tata </b> </label>
</div>

  <div class="col-sm-3" id="yahoo">
  <label id="second"> lavern.schoen@orz.biz </label>
</div>

  <div class="col-sm-2">
  <label id="third" > -3 ETH </label>
</div>

  <div class="col-sm-2">
  <button type="button" name="" class="sent"> Sent </button>
</div>

<div class="col-sm-2" id="oct">
<label id="last">10 Oct,18</label>
</div>
</div>

<div class="row" id="div">
<div class="col-sm-3">
<label id="first"><b> Eunice Thornton </b> </label>
</div>

<div class="col-sm-3" id="yahoo">
<label id="second"> ciara_gutmann@michele.biz </label>
</div>

<div class="col-sm-2">
<label id="third" > -3 ETH </label>
</div>

<div class="col-sm-2">
<button type="button" name="" class="recieved"> Recieved </button>
</div>

<div class="col-sm-2" id="oct">
<label id="last">10 Oct,18</label>
</div>
</div>

<div class="row" id="div">
<div class="col-sm-3">
<label id="first"><b> Willie Huff </b> </label>
</div>

<div class="col-sm-3" id="yahoo">
<label id="second"> fritsch.noemy@hotmail.com </label>
</div>

<div class="col-sm-2">
<label id="third" > -3 ETH </label>
</div>

<div class="col-sm-2">
<button type="button" name="" class="pending"> Pending </button>
</div>

<div class="col-sm-2" id="oct">
<label id="last">10 Oct,18</label>
</div>
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
