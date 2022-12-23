<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/<?php // echo URLROOT 
                                                            ?>/css/style.css">
  <title><?php // echo SITENAME; 
          ?></title>
</head>

<body> -->


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- meta data -->
  <meta name="description" content="Bienvenue chez IKEA Maroc. Découvrez des meubles abordables et des idées d’aménagement intérieur pour des logements et portefeuilles de toutes tailles. Faites vos achats en ligne ou trouvez un magasin près de chez
    vous." />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!--font-family-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
    rel="stylesheet" />

  <!-- title of site -->
  <title>Furniture</title>

  <!-- For favicon png -->
  <link rel="shortcut icon" type="image/icon" href="<?php echo URLROOT ?>/public/assets/logo/logo-comp.png" />

  <!--font-awesome.min.css-->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/font-awesome.min.css" />

  <!--linear icon css-->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/linearicons.css" />

  <!--animate.css-->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/animate.css" />

  <!--owl.carousel.css-->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/owl.theme.default.min.css" />

  <!--bootstrap.min.css-->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/bootstrap.min.css" />

  <!-- bootsnav -->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/bootsnav.css" />

  <!--style.css-->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/style.css" />

  <!--responsive.css-->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/responsive.css" />

  <!-- Ayoub Style -->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/ayoub.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="<?php echo URLROOT ?>/public/https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->


  <!--welcome-hero start -->
  <header id="home" class="welcome-hero">

    <!-- top-area Start -->
    <div class="top-area">
      <div class="header-area">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav navbar-sticky navbar-scrollspy" data-minus-value-desktop="70"
          data-minus-value-mobile="55" data-speed="1000">
          <!-- Start Top Search -->
          <div class="top-search">
            <div class="container">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search" />
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
              </div>
            </div>
          </div>
          <!-- End Top Search -->

          <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
              <ul>
                <li class="search">
                  <a href="#"><span class="lnr lnr-magnifier"></span></a>
                </li>
                <!--/.search-->
                <li class="nav-setting">
                  <a href="#"><span class="lnr lnr-cog"></span></a>
                </li>
                <!--/.search-->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="lnr lnr-cart"></span>
                    <span class="badge badge-bg-1">2</span>
                  </a>
                  <ul class="dropdown-menu cart-list s-cate">
                    <li class="single-cart-list">
                      <a href="#" class="photo"><img
                          src="<?php echo URLROOT ?>/public/assets/images/collection/arrivals1.png" class="cart-thumb"
                          alt="chair-image" /></a>
                      <div class="cart-list-txt">
                        <h6>
                          <a href="#">arm <br />
                            chair</a>
                        </h6>
                        <p>1 x - <span class="price">$180.00</span></p>
                      </div>
                      <!--/.cart-list-txt-->
                      <div class="cart-close">
                        <span class="lnr lnr-cross"></span>
                      </div>
                      <!--/.cart-close-->
                    </li>
                    <!--/.single-cart-list -->
                    <li class="single-cart-list">
                      <a href="#" class="photo"><img
                          src="<?php echo URLROOT ?>/public/assets/images/collection/arrivals2.png" class="cart-thumb"
                          alt="chair-image" /></a>
                      <div class="cart-list-txt">
                        <h6>
                          <a href="#">single <br />
                            armchair</a>
                        </h6>
                        <p>1 x - <span class="price">$180.00</span></p>
                      </div>
                      <!--/.cart-list-txt-->
                      <div class="cart-close">
                        <span class="lnr lnr-cross"></span>
                      </div>
                      <!--/.cart-close-->
                    </li>
                    <!--/.single-cart-list -->
                    <li class="single-cart-list">
                      <a href="#" class="photo"><img
                          src="<?php echo URLROOT ?>/public/assets/images/collection/arrivals3.png" class="cart-thumb"
                          alt="chair-image" /></a>
                      <div class="cart-list-txt">
                        <h6>
                          <a href="#">wooden arn <br />
                            chair</a>
                        </h6>
                        <p>1 x - <span class="price">$180.00</span></p>
                      </div>
                      <!--/.cart-list-txt-->
                      <div class="cart-close">
                        <span class="lnr lnr-cross"></span>
                      </div>
                      <!--/.cart-close-->
                    </li>
                    <!--/.single-cart-list -->
                    <li class="total">
                      <span>Total: $0.00</span>
                      <button class="btn-cart pull-right" onclick="window.location.href='#'">
                        view cart
                      </button>
                    </li>
                  </ul>
                </li>
                <!--/.dropdown-->
                <!--/.Login-->
                <li class="nav-sign-in" style="width: 6.5rem;margin-top: -1rem;">
                  <?php if (!isset($_SESSION['user_id'])) { ?>
                  <a href="<?php echo URLROOT ?>/users/login">
                    <img src="<?php echo URLROOT ?>/public/assets/images/icons/sign-in-icon.svg" alt="blog image" />
                  </a>
                  <?php } else { ?>
                  <a href="<?php echo URLROOT ?>/users/logout?>" style="width: 7.2rem;">logout</a>
                  <?php } ?>
                </li>
              </ul>
            </div>
            <!--/.attr-nav-->
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="<?php echo URLROOT ?>/pages/index"><img
                  src="<?php echo URLROOT ?>/public/assets/logo/logo-comp.png" alt="brand-logo 'Furn'"
                  class="brand-logo" /></a>
            </div>
            <!--/.navbar-header-->
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu" style="    display: flex !important;
    justify-content: center !important;">
              <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                <li><a href="<?php echo URLROOT ?>/pages/index">home</a></li>
                <li>
                  <!-- <a href="new-arrival.html">new arrival</a> -->
                  <a href="<?php echo URLROOT ?>/pages/newArrival">new arrival</a>
                </li>
                <li>
                  <a href="<?php echo URLROOT ?>/pages/features">features</a>
                </li>
                <li><a href="<?php echo URLROOT ?>/pages/blog">blog</a></li>
                <li><a href="<?php echo URLROOT ?>/pages/contact">contact</a></li>

                <?php if (isset($_SESSION['user_id'])) { ?>
                <li>
                  <a href="<?php echo URLROOT ?>/products/index">products</a>
                </li>
                <?php } ?>
              </ul>
              <!--/.nav -->
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!--/.container-->
        </nav>
        <!--/nav-->
        <!-- End Navigation -->
      </div>
      <!--/.header-area-->
      <div class="clearfix"></div>
    </div>
    <!-- /.top-area-->
    <!-- top-area End -->
    <!-- </header> -->
    <!--/.welcome-hero-->
    <!--welcome-hero end -->