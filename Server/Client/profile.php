<?php
session_start();
include("../connection/db.php");


    @$userid=$_SESSION['userid'];
    $sql_run=mysqli_query($conn,"SELECT * FROM `user` WHERE id='$userid'");
    $length = mysqli_num_rows($sql_run);
    $row = mysqli_fetch_array($sql_run);

 if(isset($_POST['btnrevise']))
 {
        
        $oldpassword=mysqli_real_escape_string($conn, $_POST['oldpassword']);
        $newpassword=mysqli_real_escape_string($conn, $_POST['newpassword']);
        $newconfpassword=mysqli_real_escape_string($conn, $_POST['newconfpassword']);
        

            if($oldpassword == $row['password']){
                $updateuser=mysqli_query($conn,"UPDATE user SET password='$newpassword' WHERE id='$userid'");

                if($updateuser)
                {
                    echo "<script>alert('Your Password Has Been Changed!!')</script>";

                }
                
            }
            else
            {
                     echo "<script>alert('Your Old Password is not correct!!')</script>";
            }
        
  }   

if(isset($_POST['btnverify']))
{
    $idtype=mysqli_real_escape_string($conn, $_POST['idtype']);
    $idcardno=mysqli_real_escape_string($conn, $_POST['idcardno']);
    $profile = $_FILES['profile']['name'];
    $frontimg = $_FILES['frontimg']['name'];
    $backimg = $_FILES['backimg']['name'];
    
    $tmp_img1 = $_FILES['profile']['tmp_name'];
    $tmp_img2 = $_FILES['frontimg']['tmp_name'];
    $tmp_img3 = $_FILES['backimg']['tmp_name'];

    $target_dir = "../src/images/users/";
    $target_file1 = $target_dir . basename($_FILES['profile']['name']);
    $target_file2 = $target_dir . basename($_FILES['frontimg']['name']);
    $target_file3 = $target_dir . basename($_FILES['backimg']['name']);

    $updatimg=mysqli_query($conn,"UPDATE user SET ID_type='$idtype',Card_ID_No='$idcardno',image='$profile',Front_image='$frontimg',Back_image='$backimg' WHERE id='$userid'");

    move_uploaded_file($tmp_img1, $target_file1);
    move_uploaded_file($tmp_img2, $target_file2);
    move_uploaded_file($tmp_img3, $target_file3);

    if($updatimg)
    {
        echo "<script>alert('Thank You!! Please Wait For Verifying Your ID!!');
        window.location.href='profile.php';
                </script>";
    }
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
                <!-- edit md -->
                <script>
                    function getimagefile()
                    {
                        var profileimg=document.querySelector('.profile');
                        // console.log(profileimg.value);
                        document.getElementById('profileimg').value=profileimg.value;
                        var fReader = new FileReader();
                        fReader.readAsDataURL(profileimg.files[0]);
                        fReader.onloadend = function(event)
                        {
                            var img = document.getElementById("profileimage");
                            img.src = event.target.result;

                        }                  
                        // document.getElementById('profileimage').src=profileimg.value;
                        // window.location.href='profile.php?profile='+profileimg;
                    }
                </script>
                        <div class="col-md-3">
                            <form action="#" method="post" enctype="multipart/form-data">
                            <img src="../src/images/users/<?php echo $row['image']; ?>" alt="" class="w-100" id="profileimage" style="height: 280px;">
                          <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input profile" id="customFile" onchange="getimagefile()" name="profile">
                                <input type="hidden" class="single-input" id="profileimg">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                            <div class="pplabel">
                              <h6>Account : <?php echo @$row['username']; ?> / <?php echo @$row['account_number']; ?></h6>
                              </div>
                              <div class="pplabel">
                              <h6>USDT : 156250</h6>
                            </div>
                            
                        </div>
                        <!-- end -->
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
      <!-- start form -->
      
        <div class="mt-10">
            <input type="text" name="first_name" placeholder="<?php echo @$row['email'] ?>"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'July'" disabled
                class="single-input" readonly>
        </div>
        <div class="mt-10">
            <div class="form-select" id="default-select">
                <select name="idtype">
                    <option value="">Choose ID Card</option>
                    <option value="NRC">NRC</option>
                    <option value="Passport">Passport</option>
                    <option value="Driving Licence">Driving Licence</option>
                    <option value="Career ID">Career ID</option>
                </select>
            </div>
        </div>
        <div class="mt-10">
            <input type="text" name="idcardno" placeholder="ID Card Number"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID Number....'" required
                class="single-input">
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="frontimg">
            <label class="custom-file-label" for="customFile">ID Front</label>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="backimg">
            <label class="custom-file-label" for="customFile">ID Back</label>
          </div>

         <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1" name="btnverify">Submit </button>
 </div>
    </form>
    <!--  end form -->
    </div>
     <!-- edit md -->
    <div id="chngpassword" class="container tab-pane fade"><br>
      <h3>Change Password</h3>
      <form action="" method="post">
       <div class="mt-10">
            <input type="password" name="oldpassword" placeholder="Old Password"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                class="single-input">
        </div>
        <div class="mt-10">
            <input type="password" name="newpassword" placeholder="New password [Minimum 6digits]"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                class="single-input">
        </div>
        <div class="mt-10">
            <input type="password" name="newconfpassword" placeholder=" Repeat Password"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Reply password'" required
                class="single-input">
        </div>
        <div class="form-group mt-3">
    <button type="submit" class="button button-contactForm btn_1" name="btnrevise">Revise </button>
 </div>
    </form>
    </div>
    <!-- end md -->
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
