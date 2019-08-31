<?php
  require("dashboard/pages/title.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>

    <!-- Navigation and Main View -->
    <div class="container-fluid bg">
      <div class="container">
        <nav class="navbar">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <img style="width: 32px;" src="img/menu-mobile.png" />
              </button>
              <a class="navbar-brand" href="#"><img src="img/wave.png"> <?php echo $title; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a class="nav_to" section="home" href="#">Home</a></li>
                <li><a class="nav_to" section="features" href="#">Features</a></li>
                <li><a class="nav_to" section="security" href="#">Privacy</a></li>
                <li><a class="nav_to" section="security" href="#">Security</a></li>
                <li><a class="nav_to" section="pricing" href="#">Pricing</a></li>
                <li><a class="nav_to" section="download" href="#">Download</a></li>
                <li><a class="nav_to" section="contact" href="#">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a class="btn bordered-circle feature_coming_soon" href="#">Login</a></li>
              </ul>
            </div>
        </nav>
        <div class="min-height">
            <div class="col-md-5">
              <div class="jumbotron">
                <div class="theme-line"></div>
                <h1 class="text-white">Take control of your recurring payments and subscriptions.</h1>
                <button class="btn btn-gold feature_coming_soon">Sign up</button>
              </div>
            </div>
            <div class="col-md-7 no-padding">
              <img class="img-100" src="img/laptop.png" alt="" />
            </div>
          </div>
      </div>
    </div>

    <!-- Home -->
    <div id="home" class="container section-less-top">
      <div class="">
          <div class="col-md-12">
              <h1 class="text-center bold">Welcome to RECURRED</h1>
              <p class="text-center dull font-18">Ever had payments come out and not know what they are for ?</p>
              <br />
              <p class="text-center">Take back control of your finances. Track subscriptions and recurring payments RECURRED makes it easy to control your spending, subscriptions, lower your bills, and stay on top of your financial life.</p>
          </div>
        </div>
    </div>

    <!-- Home Details -->
    <div class="container-fluid bg-plain">
      <div class="container">
        <div class="">
            <div class="col-md-5">
              <div class="small-jumbo">
                <p class="theme-color no-margin">RECURRED</p>
                <h1 class="text-white">Making your finances easy</h1>
                <p class="desc text-white">Take your financial freedom back and control where you spend your hard earned.</p>
                <button class="btn btn-gold feature_coming_soon">Sign up</button>
              </div>
            </div>
            <div class="col-md-7 no-padding">
              <img class="img-100" src="img/girl-image.jpg" alt="" />
            </div>
          </div>
      </div>
    </div>

    <!-- Features -->
    <div id="features" class="container section">
      <div class="">
          <div class="col-md-12">
              <h1 class="text-center bold">Awesome Features</h1>
              <p class="text-center dull font-18">Track &bull; Save &bull; Invest &bull; Give</p>
          </div>
      </div>
      <div class="">
        <div class="col-md-12">
          <div class="col-md-20">
            <img src="img/feature-1.JPG" alt="" />
            <div class="theme-line-small"></div>
              <h1>Track Your Finances</h1>
              <p>Quickly ans easily have full oversight of all transactions and recurring payments.</p>
          </div>
          <div class="col-md-20">
            <img src="img/feature-2.JPG" alt="" />
            <div class="theme-line-small"></div>
              <h1>Save</h1>
              <p>Put your saving to work by creating a saving plan.</p>
          </div>
          <div class="col-md-20">
            <img src="img/feature-3.JPG" alt="" />
            <div class="theme-line-small"></div>
              <h1>Invest</h1>
              <p>Micro investing is a grest way to help kick start your financial freedom</p>
          </div>
          <div class="col-md-20">
            <img src="img/feature-4.JPG" alt="" />
            <div class="theme-line-small"></div>
              <h1>Give</h1>
              <p>Give that extra to a charity of your choice</p>
          </div>
          <div class="col-md-20">
            <img src="img/feature-5.JPG" alt="" />
            <div class="theme-line-small"></div>
              <h1>Support</h1>
              <p>Our team are here to help no matter what your question is we have you covered.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Security -->
    <div id="security" class="container-fluid section bg-plain">
          <div class="col-md-12">
              <h1 class="text-center bold text-white">Security</h1>
              <p class="text-center dull font-18 text-white">We know how important your data is</p>
              <br />

              <div class="container">
                <p class="text-white">
                  At RECURRRED we use the best encryption possible to keep your data safe. We are committed to making sure our platform uses the most up-to-date protocols for storing your data including bank-level 256-bit encryption.
                </p>
                <p class="text-white">
                  We use a secure services to connect to more than 15,000 financial institutions around the globe. During the registration process, you will be asked to enter your online banking credentials. These credentials never go to our servers, nor are they stored by us in any way. Your credentials are sent through Plaid to your bank or credit card provider. Plaid then sends back an encrypted token to us which provides read-only access to your transaction data. We cannot move money or make any changes to your account. You can remove our read-only access by unlinking your account at any time.
                </p>
                <p class="text-white">
                  We host our servers securely using Amazon Web Services (AWS), a secure online data storage and hosting service that is used by the Department of Defense, NASA, and the Financial Industry Regulatory Authority (FINRA).
                </p>
                <p class="text-white">
                  Additionally, we do not sell your data and will never use it in any way without your permission. If you have any questions or concerns, please get in touch with us at: <a class="text-white" href="mailto:hello@recurrred.com">hello@recurrred.com</a>
                </p>
              </div>
          </div>
    </div>

    <div id="pricing" class="container section">

      <div class="">
          <div class="col-md-12">
              <h1 class="text-center bold">RECURRED Pricing</h1>
              <p class="text-center dull font-18">Take Control Of Your Recurring Payments &amp; Subscriptions And Put Your Savings To Work</p>
          </div>
      </div>

      <div class="row">


        <div class="col-md-4">
          <div class="pricing_box">
            <h4> Small </h4>
            <h6> <sup>$</sup> <strong> 9 </strong> <sub>/ month</sub> </h6>
            <table class="table">
              <tr>
                <td>Subscriptions</td>
                <th>5</th>
              </tr>
              <tr>
                <td>Reinvest Amount</td>
                <th>0$ - $500</th>
              </tr>
              <tr>
                <td>Transactions</td>
                <th>Unlimited</th>
              </tr>
              <tr>
                <td>Storage</td>
                <th>5 GB</th>
              </tr>
              <tr>
                <td>More</td>
                <th>-</th>
              </tr>
            </table>
          </div>
          <button class="join_now feature_coming_soon">
            Join Now
          </button>
        </div>

        <div class="col-md-4">
          <div class="pricing_box">
            <h4>Medium</h4>
            <h6> <sup>$</sup> <strong> 59 </strong> <sub>/ m \onth</sub> </h6>
            <table class="table">
              <tr>
                <td>Subscriptions</td>
                <th>10</th>
              </tr>
              <tr>
                <td>Reinvest Amount</td>
                <th>0$ - $1000</th>
              </tr>
              <tr>
                <td>Transactions</td>
                <th>Unlimited</th>
              </tr>
              <tr>
                <td>Storage</td>
                <th>20 GB</th>
              </tr>
              <tr>
                <td>More</td>
                <th>-</th>
              </tr>
            </table>
          </div>
          <button class="join_now feature_coming_soon">
            Join Now
          </button>
        </div>

        <div class="col-md-4">
          <div class="pricing_box">
            <h4>Enterprise</h4>
            <h6> <sup>$</sup> <strong> 99 </strong> <sub>/ month</sub> </h6>
            <table class="table">
              <tr>
                <td>Subscriptions</td>
                <th>Unlimited</th>
              </tr>
              <tr>
                <td>Reinvest Amount</td>
                <th>Unlimited</th>
              </tr>
              <tr>
                <td>Transactions</td>
                <th>Unlimited</th>
              </tr>
              <tr>
                <td>Storage</td>
                <th>200 GB</th>
              </tr>
              <tr>
                <td>More</td>
                <th>Free Projects</th>
              </tr>
            </table>
          </div>
          <button class="join_now feature_coming_soon">
            Join Now
          </button>
        </div>

        <p class="text-center">Please review our <a href="javascript:;">terms</a> and <a href="javascript:;">conditions</a></p>

      </div>

    </div>

    <!-- Testimonials -->
    <div id="testimonials" class="container-fluid testimonials-bg section">
      <div class="container ">
        <div class="">
            <div class="col-md-12">
                <h1 class="text-white text-center bold">Testimonials</h1>
                <p class="text-white text-center">why people love RECURRED</p>
            </div>
          </div>

        <div class="">
            <div class="col-md-12">

              <div class="testimonials_container text-center">
                <img class="testimonials_dp_small hidden-xs mr-35" src="img/user-avatar.png" alt="" />
                <img class="testimonials_dp_small hidden-xs mr-35" src="img/user-avatar.png" alt="" />
                <img class="testimonials_dp_big" src="img/user-avatar.png" alt="" />
                <img class="testimonials_dp_small hidden-xs ml-35 mr-35" src="img/user-avatar.png" alt="" />
                <img class="testimonials_dp_small hidden-xs mr-35" src="img/user-avatar.png" alt="" />
              </div>

              <div class="star_container text-center">
                <img class="star" src="img/star.png" alt="" />
                <img class="star" src="img/star.png" alt="" />
                <img class="star" src="img/star.png" alt="" />
                <img class="star" src="img/star.png" alt="" />
                <img class="star" src="img/star.png" alt="" />
              </div>

              <p class="text-center text-white">RECURRRED let me take control of my business and personal finances, I had no idea of the amount of payments i had coming out. </p>
              <p class="text-center text-white">Debbie Harry</p>

            </div>
        </div>



      </div>
    </div>

    <!-- Features -->
    <div class="container-fluid section-less-bottom hidden-xs">
      <div class="container">

        <div class="col-md-12">
            <h1 class="text-center bold">RECURRRED FEATURES</h1>
            <p class="text-center dull font-18">Control your finances today</p>
        </div>

        <div class="min-height">
          <div class="col-md-6 no-padding">
            <img class="img-100" src="img/laptop.png" alt="" />
          </div>
          <div class="col-md-6">

            <div class="">
              <div class="col-md-3">
                <img class="feature_image" src="img/feature-1.JPG" alt="" />
              </div>
              <div class="col-md-9">
                <h4 class="bold">Sync across your devices</h4>
                <p class="dull ">Your data your way RECURRRED syncs across your devices so whether your in the office or on the go you have full control.</p>
              </div>
            </div>

            <div class="">
              <div class="col-md-3">
                <img class="feature_image" src="img/feature-2.JPG" alt="" />
              </div>
              <div class="col-md-9">
                <h4 class="bold">Secure connection</h4>
                <p class="dull">
                  RECURRRED security connects to more than 15,000 financial
                  institutions, we’ve invested heavily in making sure
                  RECURRRED uses the most up-to-date industry protocols for
                  storing your data including bank-level 256-bit encryption.
                </p>
              </div>
            </div>

            <div class="">
              <div class="col-md-3">
                <img class="feature_image" src="img/feature-3.JPG" alt="" />
              </div>
              <div class="col-md-9">
                <h4 class="bold">Notifications</h4>
                <p class="dull">Don’t be left unaware of upcoming payments, with RECURRRED you can be notified of up coming payments before they happen.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Download App -->
    <div id="download" class="container-fluid style-bg">
      <h1 class="text-center bold text-white">Download the App</h1>
      <p class="text-center dull font-18 text-white">Download our awesome app from the App Store now!</p>

      <div class="col-md-12 text-center">
          <a href="javascript:;" class="feature_coming_soon"><img class="store_link" src="img/play-store.PNG" /></a>
          <a href="javascript:;" class="feature_coming_soon"><img class="store_link" src="img/apple-store.PNG" /></a>
      </div>

    </div>

    <!-- FOOTER & CONTACT -->
    <footer id="contact">
      <div class="container">
        <div class="footer-top">

          <div class="col-md-12">
            <h1 class="text-center text-white">Get in touch!</h1>

            <div class="col-md-12">
              <p class="text-center dull text-white address_text"><img src="img/icon-location.JPG" alt="" /> 300  Prudence Street, Westland, Michigan, 48185</p>
            </div>

            <div class="col-md-3 hidden-xs">
              &nbsp;
            </div>
            <div class="col-md-3 col-xs-12">
              <p class="dull text-white text-center address_text"><img src="img/icon-call.JPG" alt="" /> +61 40137 8390</p>
            </div>
            <div class="col-md-3 col-xs-12">
              <p class="dull text-white text-center address_text"><img src="img/icon-email.JPG" alt="" /> <a class="text-white" href="mailto:hello@recurrred.com">hello@recurrred.com</a></p>
            </div>
            <div class="col-md-3 hidden-xs">
              &nbsp;
            </div>
            </div>

          </div>
        </div>

        <div class="footer-bottom">

          <div class="container">
            <div class="col-md-4  col-xs-12">
              <a class="navbar-brand" href="javascript:;"><img src="img/footer-logo.JPG" alt="" /> RECURRED </a>
            </div>
            <div class="col-md-4 col-xs-12">
              <p class="text-center text-white dull copy-right">Copyright  © 2019 RECURRRED. All rights reserved</p>
            </div>
            <div class="text-center col-md-4 col-xs-12">
              <a href="javascript:;"><img class="social" src="img/social.JPG" alt="" /></a>
            </div>
            <div class="clear"></div>
          </div>

          <div class="clear"></div>
        </div>


      </div>
    </footer>



    <script>
      $(document).ready(function(){
        $(".nav_to").click(function() {
            var section = $(this).attr("section");
            $('html, body').animate({
                scrollTop: $("#"+section).offset().top
            }, 1000);
        });
        $(".feature_coming_soon").click(function() {
            swal({
              title: "This feature is coming soon!",
              text: "",
              icon: "info",
            });
        });

        //$(".container-fluid").css("width",($(window).width())+"px");


      });
    </script>
  </body>
</html>
