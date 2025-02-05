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
                                        <?php
                                            if(isset($_SESSION['user_id'])){
                                                $login_id = $_SESSION['user_id'];
                                                $sql = "SELECT * FROM `user` WHERE id = '$login_id'";
                                                $run = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_array($run);
                                                $type = $row["usertype"];
                                                echo "<a class='nav-link' href='../chatroom.php'>Customer Service</a>";
                                                // if($type == "agent"){
                                                //     echo "<a class='nav-link' href='../Server/chatroom.php'>Customer Service</a>";
                                                // }elseif($type == "customer"){
                                                //     echo "<a class='nav-link' href='cs.php'>Customer Service</a>";
                                                // }
                                            } else{
                                                echo "<a class='nav-link' href='cs.php'>Customer Service</a>";
                                            }
                                            ?>
                                        <!-- // <a class="nav-link" href="cs.php">Customer Service</a> -->
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
                            // if(isset($_SESSION['user_id'])) {
                            
                            // <!-- <div class="btn-group">
                            //     <button type="button" class="btn_1 btn-sm"><img src="img/user-header.png" width="20px" height="20px">  User Name </button> -->
                            if(isset($_SESSION['user_id'])) {
                            ?>
                            <div class="btn-group">
                                <button type="button" class="btn_1 btn-sm"><img src="img/user-header.png" width="20px" height="20px"> <?php echo $user_name; ?> </button>
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
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                            <!-- <div class="alert alert-success" role="alert">
                                This is a success alert—check it out!
                            </div> -->
                                <h1>Discover cutting-edge NFTs</h1>
                                <p>Explore NFTs and become a Metaverse native!</p>
                               <a href="creatacc.php" class="btn_1">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!--::client logo part end::-->
        <!--<section class="client_logo">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_1.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_2.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_3.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_4.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_5.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_1.png" alt="">
                            </div>
                            <div class="single_client_logo">
                                <img src="img/client_logo/client_logo_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--::client logo part end::-->

        <!-- about_us part start-->
      <!--  <section class="about_us section_padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                        <div class="learning_img">
                            <img src="img/about_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="about_us_text">
                            <h2>Find out about us in history</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. </p>
                            <a href="#" class="btn_1">Install Now</a>
                            <a href="#" class="btn_1">Watch Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- about_us part end-->

        <!--::about_us part start::-->
      <!--  <section class="live_stareams padding_bottom">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-2 offset-lg-2 offset-sm-1">
                        <div class="live_stareams_text">
                            <h2>live <br> stareams</h2>
                            <div class="btn_1">install now</div>
                        </div>
                    </div>
                    <div class="col-md-7 offset-sm-1">
                        <div class="live_stareams_slide owl-carousel">
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_1.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="live_stareams_slide_img">
                                <img src="img/live_streams_2.png" alt="">
                                <div class="extends_video">
                                    <a id="play-video_1" class="video-play-button popup-youtube"
                                        href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                        <span class="fas fa-play"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--::about_us part end::-->

        <!-- use sasu part end-->
     
        <!-- use sasu part end-->

        <!-- gallery_part part start-->
        <section class="gallery_part section_padding padding_bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section_tittle text-center">
                            <h2>Popular Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="gallery_part_item">
                            <div class="grid">
                                <div class="grid-sizer"></div>
                               <a href="img/game/apes.png" class="grid-item bg_img img-gal"
                                    style="background-image: url('img/game/apes.png')">
                                    
                                </a>
                                <!-- 2 -->
                                <a href="img/game/SolarGridLVL2.png" class="grid-item bg_img img-gal"
                                    style="background-image: url('img/game/SolarGridLVL2.png')">
                                   
                                </a>
                               
                              <a href="img/game/Azuki.png" class="grid-item bg_img img-gal"
                                    style="background-image: url('img/game/Azuki.png')">
                                   
                                </a>

                                 <a href="img/game/Angry.png" class="grid-item bg_img img-gal"
                                    style="background-image: url('img/game/Angry.png')">
                                    
                                </a>
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                    <!-- edit md -->  
                <?php
                    $saprod=mysqli_query($conn,"SELECT * FROM products Order By product_id DESC LIMIT 4");
                    while($dtrecord=mysqli_fetch_assoc($saprod))
                        {
                ?>
                    <div class="col-lg-3 col-sm-6">


                        <div class="single_pricing_part">
                            
                            <div class="col-sm-12">
                            <div class="single_footer_part">
                                <p><?php echo $dtrecord['title']; ?></p>
                             </div>

                             <div class="d-sm-block">
                          <img src="../src/images/products/<?php echo $dtrecord['image']; ?>" class="w-100" style="height:150px;">
                                         
                    </div>
                        </div>
                        
                            <ul>
                                <li><?php echo $dtrecord['name']; ?></li>
                                <li>Price : <?php echo $dtrecord['price']; ?> USDT</li>
                              
                            </ul>
                            <a href="trade.php?product=<?php echo $dtrecord['product_id']; ?>" class="btn_2">Trade</a>
                        </div>
                    </div>

                    <?php
                        }
                    ?>
                    <!-- end md -->
                </div>
            </div>
        </section>
        <!-- pricing part end-->

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
                               <img src="img/one step ahead.png" alt="#"> 
                                <p><b>One Step Ahead</b> <br>
                                  Include the world's most popular NFTs
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-sm-7 col-lg-4">
                            <div class="single_footer_part single_footer_part">
                              <img src="img/Zero handling fee.png" alt="#">
                              <div> 
                                <p><b>Zero handing free</b> <br>
                                  Any Position of your favorite NFT
                                </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-lg-4 single_footer_part">
                            <div class="single_footer_part">
                              <img src="img/Excellent creation.png" alt="#"> 
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