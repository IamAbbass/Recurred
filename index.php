<?php
  require("dashboard/pages/title.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>

  <div class="container-fluid bg">
    <div class="container">
      <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/wave.png"> <?php echo $title; ?></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Security</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a class="btn bordered-circle" href="#">Login</a></li>
            </ul>
          </div>
      </nav>
      <div class="row min-height">
          <div class="col-md-5">
            <div class="jumbotron">
              <div class="theme-line"></div>
              <h1 class="text-white">Take control of your recurring payments and subscriptions.</h1>
              <button class="btn btn-gold">Sign up</button>
            </div>
          </div>
          <div class="col-md-7 no-padding">
            <img class="img-100" src="img/laptop.png" alt="" />
          </div>
        </div>
    </div>
  </div>

  <div class="container section-less-top">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center bold">Welcome to RECURRED</h1>
            <p class="text-center dull">Ever had payments come out and not know what they are for ?</p>
            <p class="text-center">Take back control of your finances. Track subscriptions and recurring payments RECURRED makes it easy to control your spending, subscriptions, lower your bills, and stay on top of your financial life.</p>
        </div>
      </div>
  </div>

  <div class="container-fluid bg-plain">
    <div class="container">
      <div class="row">
          <div class="col-md-5">
            <div class="small-jumbo">
              <p class="theme-color no-margin">RECURRED</p>
              <h1 class="text-white">Making your finances easy</h1>
              <p class="desc text-white">Take your financial freedom back and control where you spend your hard earned.</p>
              <button class="btn btn-gold">Sign up</button>
            </div>
          </div>
          <div class="col-md-7 no-padding">
            <img class="img-100" src="img/girl-image.jpg" alt="" />
          </div>
        </div>
    </div>
  </div>

  <div class="container section">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center bold">Awesome Features</h1>
            <p class="text-center dull">Track &bull; Save &bull; Invest &bull; Give</p>
        </div>
      </div>
  </div>

  <div class="container">
    <div class="row">
          <div class="col-md-12">
            <div class="col_20_percent">
              <img src="img/feature-1.JPG" alt="" />
              <div class="theme-line-small"></div>
                <h1>Track Your Finances</h1>
                <p>Quickly ans easily have full oversight of all transactions and recurring payments.</p>
            </div>
            <div class="col_20_percent">
              <img src="img/feature-2.JPG" alt="" />
              <div class="theme-line-small"></div>
                <h1>Save</h1>
                <p>Put your saving to work by creating a saving plan.</p>
            </div>
            <div class="col_20_percent">
              <img src="img/feature-3.JPG" alt="" />
              <div class="theme-line-small"></div>
                <h1>Invest</h1>
                <p>Micro investing is a grest way to help kick start your financial freedom</p>
            </div>
            <div class="col_20_percent">
              <img src="img/feature-4.JPG" alt="" />
              <div class="theme-line-small"></div>
                <h1>Give</h1>
                <p>Give that extra to a charity of your choice</p>
            </div>
            <div class="col_20_percent">
              <img src="img/feature-5.JPG" alt="" />
              <div class="theme-line-small"></div>
                <h1>Support</h1>
                <p>Our team are here to help no matter what your question is we have you covered.</p>
            </div>
          </div>
    </div>
  </div>


  <div class="container-fluid bg">


    <div class="container section">
      <div class="row">
          <div class="col-md-12">
              <h1 class="text-white text-center bold">Testimonials</h1>
              <p class="text-white text-center">why people love RECURRED</p>
          </div>
        </div>
    </div>


    <div class="container">
      <div class="row">
          <div class="col-md-5">
            <div class="jumbotron">
              <div class="theme-line"></div>
              <h1 class="text-white">Take control of your recurring payments and subscriptions.</h1>
              <button class="btn btn-gold">Sign up</button>
            </div>
          </div>
          <div class="col-md-7 no-padding">
            <img class="img-100" src="img/laptop.png" alt="" />
          </div>
        </div>
    </div>
  </div>





  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1>Testi monials here</h1>
        </div>
      </div>
  </div>


  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>RECURRED Features </h1>
            <p>why people love RECURRED</p>
        </div>
      </div>
  </div>


</body>
</html>
