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
    <link rel="stylesheet" href="css/nice-select.css">
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

        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h3>My Profile </h3>
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
            
               <div class="whole-wrap">
            <div class="container box_1170">
               <div class="row">
                        <div class="col-md-3">
                            <img src="img/userprofile.jpg" alt="" class="img-fluid">
                          <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                            <div class="pplabel">
                              <h6>Account : Cho002 / 631900</h6>
                              </div>
                              <div class="pplabel">
                              <h6>USDT : 156250</h6>
                            </div>
                            
                        </div>
                        <div class="col-md-9 mt-sm-20">
                            
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#verified">Verified</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#chngpassword">Change Password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#rechange">Recharge record</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#position">Close position record</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#in-site">In-site transfer</a>
      </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="verified" class="container tab-pane active"><br>
      <h3>Verified</h3>
      <form action="#">
        <div class="mt-10">
            <input type="text" name="first_name" placeholder="July"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'July'" disabled
                class="single-input">
        </div>
        <div class="mt-10">
            <div class="form-select" id="default-select">
                <select>
                    <option value=" 1">ID Card</option>
                    <option value="1">Dhaka</option>
                    <option value="1">Dilli</option>
                    <option value="1">Newyork</option>
                    <option value="1">Islamabad</option>
                </select>
            </div>
        </div>
        <div class="mt-10">
            <input type="type" name="number" placeholder="Number"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                class="single-input">
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">ID Front</label>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">ID Back</label>
          </div>

         <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1">Submit </button>
 </div>
    </form>
    </div>
    <div id="chngpassword" class="container tab-pane fade"><br>
      <h3>Change Password</h3>
      <form action="#">
       <div class="mt-10">
            <input type="password" name="last_name" placeholder="Old Password"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                class="single-input">
        </div>
        <div class="mt-10">
            <input type="password" name="last_name" placeholder="New password [Minimum 6digits]"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                class="single-input">
        </div>
        <div class="mt-10">
            <input type="password" name="last_name" placeholder=" Repeat Password"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Reply password'" required
                class="single-input">
        </div>
        <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1">Revise </button>
 </div>
    </form>
    </div>
    <div id="rechange" class="container tab-pane fade"><br>
        <div class="quote-wrapper">
            <div class="quotes">
                <table>
                    <tr>
                        <td width="70%"><p>Check-In : <br>
                            Handling fee : <br>
                           Approval Status :<br>
                        Time :
                        </p>
                             </td>
                        <td><p>2.5 <br>
                           0 <br>
                        Paused <br>
                       2022-11.02 Time
                        </p></td>
                    </tr>
</table>
<br><br>
<table>
    <tr>
        <td width="70%"><p>Recharge : <br>
            Handling fee : <br>
           Approval Status :<br>
        Time :
        </p>
             </td>
        <td><p>2.5 <br>
           0 <br>
        paused <br>
       2022-11.02 Time
        </p></td>
    </tr>
</table>

            </div>
         </div></div>
    <div id="position" class="container tab-pane fade"><br>
        <div class="quote-wrapper">
            <div class="quotes">
                <table>
                    <tr>
                        <td width="70%"><p>Time : <br>
                            Direction : <br>
                           Price :<br>
                       Amount : <br>
                       Details: <br>
                       Handling fee:<br>
                       Result :
                        </p>
                             </td>
                        <td><p>2022-11.02 Time <br>
                           Buy Up <br>
                        1124.44 - 1225-3 <br>
                       1000 <br>
                       30s/5% <br>
                       0 <br>
                       50 
                        </p></td>
                    </tr>
</table>
<br><br>
<table>
    <tr>
        <td width="70%"><p>Time : <br>
            Direction : <br>
           Price :<br>
       Amount : <br>
       Details: <br>
       Handling fee:<br>
       Result :
        </p>
             </td>
             <td><p>2022-11.02 Time <br>
                Buy Up <br>
             1124.44 - 1225-3 <br>
            1000 <br>
            30s/5% <br>
            0 <br>
            50 
             </p></td>
</table>

            </div>
         </div>
      </div>
      <div id="in-site" class="container tab-pane fade"><br>
        <h3>Your Balance：156150</h3>
        <form action="#">
            <div class="mt-10">
                <input type="text" name="first_name" placeholder="Please Enter the other party's UID or account"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please Enter the other party's UID or account'" required
                    class="single-input">
            </div>
           <div class="mt-10">
                <input type="type" name="number" placeholder="Plese Enter the transfer Amount"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Plese Enter the transfer Amount address'" required
                    class="single-input">
            </div>
            <div class="form-group mt-3">
        <button type="submit" class="button button-contactForm btn_1">Transfer Out </button>
     </div>
        </form>
      </div>
  </div>
                    
               
        </section>
        <!-- use sasu part end-->

        <!--::about_us part start::-->
        
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