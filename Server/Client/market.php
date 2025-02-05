<?php
include("../connection/db.php");
session_start();
if (isset($_SESSION["user_id"])) {
$id = $_SESSION["user_id"];
$sql = "SELECT * FROM `user` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_array($result);
$user_name = $res["username"];
}
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NFTs OpenSea</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="body_bg">
        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                              <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="market.php">Market</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../chatroom.php">Customer Service</a>
                                    </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="term.php">Terms & Condition</a>
                                    </li>

                                 <li class="nav-item">
                                        <a class="nav-link" href="qanda.php">Q & A</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                       
                                    </li>
                                    <li class="nav-item dropdown">

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <a class="dropdown-item" href="elements.php">Elements</a>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                            <?php
                            if(isset($_SESSION['user_id'])) {
                            ?>
                            <div class="btn-group">
                                <button type="button" class="btn_1 btn-sm"><img src="img/user-header.png" width="20px" height="20px"><?php echo $user_name; ?></button>
                                <button type="button" class="btn_1 btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profile.php">Profile Setting</a>
                                    <!-- <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>-->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../logout.php">Logout</a>
                                </div>
                                </div>
                                <!-- <a href="../Server/logout.php" class="btn_1 d-none d-sm-block">Logout</a> -->
                                <?php } else { ?>
                                <a href="login.php" class="btn_1 d-none d-sm-block">Login</a>
                                <?php } ?>
                            
                              
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h3>Market</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

      
        
        <!-- gallery_part part end-->

        <!-- use sasu part end-->
      <!--  -->
        <!-- use sasu part end-->

        <!-- pricing part start-->
        <section class="pricing_part padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section_tittle text-center">
                            <h2>Market</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">

                        <div class="single_pricing_part">
                            
                            <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <p>Bride Alice</p>
                             </div>

                             <div>
                          <img src="img/game/Archon.jpg">
                                         
                    </div>
                        </div>
                            <ul>
                                <li>@Tap Fantasy</li>
                                <li>Price : 792.09 USDT</li>
                              
                            </ul>
                            <a href="trade.php" class="btn_2">Trade</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6">

                        <div class="single_pricing_part">
                            
                            <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <p>Skeleton Back</p>
                             </div>

                             <div>
                          <img src="img/game/Archon.jpg">
                                         
                    </div>
                        </div>
                            <ul>
                                <li>@Skeleton Back#155</li>
                                <li>Price : 1582.4  USDT</li>
                              
                            </ul>
                            <a href="trade.php" class="btn_2">Trade</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <div class="single_pricing_part">
                            
                            <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <p>Archon</p>
                             </div>

                             <div>
                          <img src="img/game/Archon.jpg">
                                         
                    </div>
                        </div>
                            <ul>
                                <li>@Archon</li>
                                <li>Price : 1263.4 USDT</li>
                              
                            </ul>
                            <a href="trade.php" class="btn_2">Trade</a>
                        </div>
                    </div>

                   <div class="col-lg-3 col-sm-6">

                        <div class="single_pricing_part">
                            
                            <div class="col-sm-6 col-lg-3">
                            <div class="single_footer_part">
                                <p>GE#02232</p>
                             </div>

                             <div>
                          <img src="img/game/GE.jpg">
                                         
                    </div>
                        </div>
                            <ul>
                                <li>GE#02232</li>
                                <li>Price : 335.7 USDT</li>
                              
                            </ul>
                            <a href="trade.php" class="btn_2">Trade</a>
                        </div>
                    </div>



                    <br>

                </div>


            </div>
        </section>
        <!-- pricing part end-->

        <!--::footer_part start::-->
        <footer class="footer_part">
            <br>
            <div class="copygight_text">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="copyright_text">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> NFTs OpenSea Reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            </div>
                        </div>
                        <!--<div class="col-lg-4">
                            <div class="footer_icon social_icon">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                    <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->
    </div>


    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>