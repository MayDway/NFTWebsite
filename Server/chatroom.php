<?php
include("connection/db.php");
session_start();

?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NFTs OpenSea</title>
    <link rel="icon" href="Client/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Client/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="Client/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="Client/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="Client/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="Client/css/flaticon.css">
    <link rel="stylesheet" href="Client/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="Client/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="Client/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="Client/css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>

<body>
    <div class="body_bg">
        <!--::header part start::-->
        <header class="main_menu single_page_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php"> <img src="Client/img/logo.png" alt="logo"> </a>
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
                                        <a class="nav-link" href="cs.php">Customer Service</a>
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
                            if(isset($_SESSION['user'])) {
                            ?>
                            <div class="btn-group">
                                <button type="button" class="btn_1 btn-sm"><img src="img/user-header.png" width="20px" height="20px">  User Name </button>
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

                                    

        <!--::footer_part start::-->
        <footer class="footer_part">
            <div class="footer_top">
                <div class="container">
                     <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section_tittle text-center">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-sm-7 col-lg-4">
                            
                            <div class="single_footer_part">
                               <img src="Client/img/one step ahead.png" alt="#"> 
                                <p><b>One Step Ahead</b> <br>
                                  Include the world's most popular NFTs
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-sm-7 col-lg-4">
                            <div class="single_footer_part single_footer_part">
                              <img src="Client/img/Zero handling fee.png" alt="#">
                              <div> 
                                <p><b>Zero handing free</b> <br>
                                  Any Position of your favorite NFT
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-lg-4 single_footer_part">
                            <div class="single_footer_part">
                              <img src="Client/img/Excellent creation.png" alt="#"> 
                                <p><b>Excellent creation</b> <br>
                                  Bringing you one step closer to the digital world
                                </p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
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
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->
    </div>


    <!-- jquery plugins here-->
    <script src="Client/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="Client/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="Client/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="Client/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="Client/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="Client/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="Client/js/owl.carousel.min.js"></script>
    <script src="Client/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="Client/js/slick.min.js"></script>
    <script src="Client/js/jquery.counterup.min.js"></script>
    <script src="Client/js/waypoints.min.js"></script>
    <script src="Client/js/contact.js"></script>
    <script src="Client/js/jquery.ajaxchimp.min.js"></script>
    <script src="Client/js/jquery.form.js"></script>
    <script src="Client/js/jquery.validate.min.js"></script>
    <script src="Client/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="Client/js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var conn = new WebSocket('ws://localhost:8080');
            conn.onopen = function(e) {
                console.log("Connection established!");
            };

            conn.onmessage = function(e) {
                console.log(e.data);
            };
        });
    </script>
</body>

</html>