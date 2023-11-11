<?php
    include("../connection/db.php");
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NFTs OpenSeas</title>
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
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
                                            <a class="dropdown-item" href="elements.php">Customer Service</a>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                           <!-- <a href="#" class="btn_1 d-none d-sm-block">Login</a> -->
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

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h3>Create Account</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <div class="element_page black">
        <!-- Start Sample Area -->
        <section class="sample-text-area">
            <div class="container box_1170">
                <h3 class="text-heading">Create account</h3>
                  <p>Already have an account? <a href="login.php" class="genric-btn primary-border radius">Login In</a></p><br>

                  <form action="../register.php" method="post">
                    <!-- edit md -->
                    <?php

                            $username_id = rand(10000, 99999);
                            $sql_run1=mysqli_query($conn,"SELECT MAX(account_number) AS max_id FROM user");
                        // $query = "SELECT MAX(id) AS max_id FROM user";
                        // $result = $mysqli->query($query);
                        $row1 = mysqli_fetch_assoc($sql_run1);
                            
                        // $row = $result->fetch_assoc();
                        if ($row1['max_id'] === null) {
                            $next_user_id = 10000;
                        } else {
                            $next_user_id = $row1['max_id'] + 1;
                        }
                        ?>
                            <div class="mt-10">
                                <input type="text" placeholder="account_id" name="account_id"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
                                    class="single-input" value="<?php echo $next_user_id; ?>" readonly>
                            </div>
                            <div class="mt-10">
                                <button type="button" class="account_id btn btn-info" name="account_id" id="username_id">Get ID </button>

                                 <input type="hidden" name="idd" id="idd" value="<?php echo $username_id; ?>">
                                <input type="text" placeholder="Name" name="name" id="account"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
                                    class="single-input">

                            </div>
                            <!-- end md -->
                            <div class="mt-10">
                                <input type="password" placeholder="password [Minimum 6digits]" name="password"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="password" placeholder=" Repeat Password" name="confirm_password"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Reply password'" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="email" name="email" placeholder="Email" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                                    class="single-input">
                            </div>
                            
                             <div class="mt-10">
                                <input type="number" name="phone" placeholder="Phone "
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required
                                    class="single-input">
                            </div>
                            

                             <div class="form-group mt-3">
                        <button type="submit" name="register" class="button button-contactForm btn_1">Register </button>
                     </div>
                        </form>

           
            </div>
        </section>
        <!-- End Sample Area -->

        <!-- Start Button -->
       
        <!-- End Button -->

        <!-- Start Align Area -->
      
    </div>
    <!-- End Align Area -->
    </div>

    <!--::footer_part start::-->
    <footer class="footer_part">
            <br>
            <div class="copygight_text">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="copyright_text">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> NFT OpenSea Reserved 
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
    <script src="../src/scripts/func.js"></script>
</body>

</html>