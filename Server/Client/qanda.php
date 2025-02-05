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
    <title>Q & A</title>
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

        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h3>Question and Answers </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->

        <!--::client logo part end::-->
       
        <!--::client logo part end::-->

        <!-- use sasu part end-->
        <section class="Latest_War padding_top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                            <h2>Q&A</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                 <div class="col-md-12 mt-sm-30">
                        <div class="">
                           <ul style="color:#ffffff">
                                <li><img src="img/help.png">What is a non-fungible token (NFT)?</span>
                                 <p align="justify">A non-fungible token, or NFT for short, is a blockchain-based token that represents the ownership and provenance of a specific asset such as an image or video.</p> <br>
                                </li>
                                <li><img src="img/help.png">What is the tiktok NFT marketplace?</span>
                                    <p align="justify">The marketplace is a one-stop platform for listing and trading NFTs. NFTs cover digital art, collectibles, GameFi, the metaverse, and more.</p>
                                </li><br>
                              
                                 <li><img src="img/help.png">What Does Sweep The Floor Mean In NFT?</span>
                                    <p align="justify">“Sweep the floor” is a term used when an individual or an NFT project buys all of the NFTs at the floor price of a particular NFT collection or project. This term is applied to both retail investors and NFT projects.</p>
                                </li><br>
                              

                               <li><img src="img/help.png">What Are The Benefits Of NFTs?</span>
                                    <p align="justify">You can highlight numerous benefits of NFTs, such as their ability to enhance the security of digital assets and facilitate the ownership of physical assets.</p><br>
                                    <p align="justify">NFTs are associated with blockchain technology, which ensures their immutability and decentralized verification for enhanced security.</p><br>
                                    <p align="justify">They help to solve issues related to ownership by allowing anyone to verify the owner of an NFT with specific identifiers.</p><br>
                                    <p align="justify">Additionally, NFTs also address problems related to centralization by promoting freedom from the control of centralized authorities.</p><br>

                                </li><br>
                              

                               <li><img src="img/help.png">What Are the Best NFT Games?</span>
                                    <p align="justify">Here is a list of the best NFT games:-</p>
                                    <ol class="ordered-list">
                                <li><p align="justify">Axie Infinity</p></li>
                                <li><p align="justify">Alien Worlds</p></li>
                                <li><p align="justify">Gods Unchained</p></li>
                                <li><p align="justify">The Sandbox</p></li>
                                <li><p align="justify">Splinterlands</p></li>
                                <li><p align="justify">Sorare</p></li>
                                <li><p align="justify">The Walking Dead: Empires</p></li>
                                <li><p align="justify">Dogami</p></li>
                                <li><p align="justify">The Parallel</p></li>
                                <li><p align="justify">Illuvium</p></li>
                            </ol>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
        </section>
        <!-- use sasu part end-->

        <!--::about_us part start::-->
        <section class="live_stareams padding_bottom">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-3 offset-lg-1 offset-sm-1">
                        <div class="live_stareams_text">
                            <h2>NFTs <br> Product</h2>
                            <div class="btn_1">Trade Now</div>
                        </div>
                    </div>
                    <div class="col-md-7 offset-sm-1">
                        <div class="live_stareams_slide owl-carousel">
                            <div class="live_stareams_slide_img">
                                <img src="img/game/apes.png" alt="">
                                
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/game/SolarGridLVL2.png" alt="">
                               
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/game/Azuki.png" alt="">
                               
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/game/Angry.png" alt="">
                                
                            </div>
                           
                           
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::about_us part end::-->

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