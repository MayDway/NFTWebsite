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
    if(@$_REQUEST['product']!="")
    {
        $product_id=$_REQUEST['product'];
        $selectproduct=mysqli_query($conn,"SELECT * FROM products WHERE product_id='$product_id'");
        $rowproduct=mysqli_fetch_assoc($selectproduct);
            
    }
    if(@$_SESSION['user_id']!="")
    {
        @$userid=$_SESSION['user_id'];
        $sql_run1=mysqli_query($conn,"SELECT * FROM `user` WHERE id='$userid'");
        $row1 = mysqli_fetch_array($sql_run1);
    }
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trade</title>
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


    
    <style>
        /* Add your modal styling here */
        #myModal {
            display: none;
            width: 25%;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        #myModal1 {
            display: none;
            width: 25%;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
    </style>
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
                                   
                                   
                                </ul>
                            </div>
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
                                <h3>Trade Detail </h3>
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
                            <img src="../src/images/products/<?php echo $rowproduct['image']; ?>" alt="" class="w-100" style="height: 250px;">
                        </div>
                        <div class="col-md-9 mt-sm-20">
                            <h6><?php echo $rowproduct['title']; ?></h6>
                            <p align="justify"><?php echo $rowproduct['description']; ?></p><br>
                            <h6> Price : <?php echo $rowproduct['price']; ?> USDT </h6> <br>

                           <form action="#">
                            
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-clock" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select name="secondsSelect" id="secondsSelect">
                                        <option value="">Holding Time</option>
                                        <option value="30">30s/Income5% / 20-99999999</option>
                                        <option value="60">60s/Income10% / 5000-99999999</option>
                                        <option value="120">120s/Income15% / 20000-99999999</option>
                                        <option value="150">150s/Income20% / 100000-99999999</option>
                                    </select>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function addamount(val)
                                {
                                    document.getElementById('amount').value=val;
                                }
                            </script>
                            <div class="mt-10">

                                <table>
                   <tr>
                       <td><input type="number" name="amount" placeholder="Amount" min=0
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Amount'" required
                                    class="single-input-primary" id="amount"> </td>
                       <td><div class="button-group-area mt-40">
                   <a style="cursor: pointer;" class="genric-btn primary small" id="am1" onclick="addamount(1000)">1000</a>
                 <a style="cursor: pointer;" class="genric-btn success small" id="am2" onclick="addamount(5000)">5000</a>
                   <a style="cursor: pointer;" class="genric-btn info small" id="am3" onclick="addamount(10000)">10000</a>
                    <a style="cursor: pointer;" class="genric-btn link small" onclick="addamount(document.getElementById('balance').textContent)">All</a>
                 
                </div>
                <input type="hidden" name="control" id="control" value="<?php echo @$row1['control']; ?>">
                </td>
            </tr>
               </table>
                            </div>
                     </form>
                        
                      <div class="mt-10">
                            <table class="table w-75">
                   <tr>
                       <td><h6>Available Balance：<span id="balance"><?php echo @$row1['balance']; ?></span></h6>
                        <?php
                            
                            if(@$_SESSION['user_id']!="")
                            {


                            @$userid=$_SESSION['user_id'];
                            $sql_run=mysqli_query($conn,"SELECT * FROM `user` WHERE id='$userid'");
                            $row = mysqli_fetch_array($sql_run);
                            if(@$row['status']=='pending' || @$row['status']=='no')
                            {
                        ?>
                        <button type="button" class="genric-btn buy circle arrow" onclick="alert('Please Pay For getting the Income!!');">
                        Buy Up
                        </button>
                        <?php
                            }
                             
                        else
                        {

                        ?>
                           <!---------->
   
                        <button type="button" class="genric-btn buy circle arrow" onclick="openModal()">
                            Buy Up
                        </button>
                            <?php
                                }
                            }
                            else
                            {   
                            
                            ?>
                              <button type="button" class="genric-btn buy circle arrow" onclick="alert('Please Pay For getting the Income!!');">
                        Buy Up
                        </button>
                        <?php
                    }
                        ?>   

                    </td>
                       <td><h6>Handling fee：<?php echo @$row1['income']; ?>%</h6>   
                        <?php
                            
                            if(@$_SESSION['user_id']!="")
                            {


                            @$userid=$_SESSION['user_id'];
                            $sql_run=mysqli_query($conn,"SELECT * FROM `user` WHERE id='$userid'");
                            $row = mysqli_fetch_array($sql_run);
                            if(@$row['status']=='pending' || @$row['status']=='no')
                            {
                        ?>
                        <button type="button" class="genric-btn buy circle arrow" onclick="alert('Please Pay For getting the Income!!');">
                        Buy Down
                        </button>
                        <?php
                            }
                             
                        else
                        {

                        ?>
                           <!---------->
   
                        <button type="button" class="genric-btn buy circle arrow" onclick="openModal1()">
                                Buy Down
                            </button>
                            <?php
                                }
                            }
                            else
                            {   
                            
                            ?>
                              <button type="button" class="genric-btn buy circle arrow" onclick="alert('Please Pay For getting the Income!!');">
                        Buy Down
                        </button>
                        <?php
                    }
                        ?> 
                        </td>


                   </tr>
               </table>
                   </div>



    <!-- Buy Up Model -->
        <!-- Modal -->
    <div id="myModal">
        <div class="card">
            <div class="card-header">
              <button class="close" onclick="closeModal()"><span aria-hidden="true">&times;</span></button>
        <h5 class="text-heading text-dark" id="">Buy Up</h5>
        <canvas id="pieChart" width="200" height="200" class="mx-auto"></canvas>
            </div>
           
             <div class="card-body">
        Amount : <span id="am"></span><br>
        Holding Time : <span id="holding"></span><br>
        Income : <span id="income"></span><br><br>
        <h3><span id="control"></span></h3>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
        </div>
        
    </div>
 <!-------------->

 <!-- Buy Down Model -->
        <!-- Modal -->
    <div id="myModal1">
        <div class="card">
            <div class="card-header">
              <button class="close" onclick="closeModal1()"><span aria-hidden="true">&times;</span></button>
        <h5 class="text-heading text-dark" id="">Buy Down</h5>
        <canvas id="pieChart1" width="200" height="200" class="mx-auto"></canvas>
            </div>
           
             <div class="card-body">
        Amount : <span id="amnext"></span><br>
        Holding Time : <span id="holding1"></span><br>
        Income : <span id="income1"></span><br>
         <h3><span id="controluser"></span></h3>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal1()">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
        </div>
        
    </div>
    <!---------------------->

               
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
<!-- Buy Up Modal -->
   <script>
        
        const modal = document.getElementById('myModal');
        const modal1 = document.getElementById('myModal1');
        const secondsSelect = document.getElementById('secondsSelect');
        const pieChartCanvas = document.getElementById('pieChart');
        const pieChartCanvas1 = document.getElementById('pieChart1');
        const ctx = pieChartCanvas.getContext('2d');
        const ctx1 = pieChartCanvas1.getContext('2d');

        // Function to open the modal and update the pie chart
        function openModal() {

            var amountval = document.getElementById("amount").value;
            var am = document.getElementById("am");
            am.textContent = amountval;

            var holdingsec = document.getElementById("secondsSelect").value;
            var holding = document.getElementById("holding");
            holding.textContent = holdingsec + " Seconds";

            var balance=document.getElementById('balance').textContent;
            var income = document.getElementById("income");
            income.textContent = Math.floor(Math.random(balance,100000) * 1000000);

            var controluser=document.getElementById('control').value;
            var control = document.getElementById("controluser");
            control.textContent = controluser;

            
            const selectedSeconds = parseInt(secondsSelect.value, 10);

            // Update the pie chart
            updatePieChart(selectedSeconds);

            // Display the modal
            modal.style.display = 'block';
        }
        function openModal1() {

            var amountval = document.getElementById("amount").value;
            var amnext = document.getElementById("amnext");
            amnext.textContent = amountval;

            var holdingsec = document.getElementById("secondsSelect").value;
            var holding1 = document.getElementById("holding1");
            holding1.textContent = holdingsec + " Seconds";

            var balance=document.getElementById('balance').textContent;
            var income1 = document.getElementById("income1");
            income1.textContent = Math.floor(Math.random(0,balance) * 1000000);

            const selectedSeconds = parseInt(secondsSelect.value, 10);

            // Update the pie chart
            updatePieChart1(selectedSeconds);

            // Display the modal
            modal1.style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            modal.style.display = 'none';
        }
        function closeModal1() {
            modal1.style.display = 'none';
        }

        // Function to update the pie chart based on selected seconds
        function updatePieChart(seconds) {
            const data = {
                labels: ['remaining',seconds + 's'],
                datasets: [{
                    data: [seconds, 150 - seconds],
                    backgroundColor: ['#FF6384', '#36A2EB'],
                }],
            };

            const options = {
                cutoutPercentage: 80,
                responsive: false,
            };

            // Destroy previous chart if it exists
            if (window.myPie) {
                window.myPie.destroy();
            }

            // Create a new pie chart
            window.myPie = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: options,
            });
        }

        function updatePieChart1(seconds) {
            const data = {
                labels: ['remaining',seconds + 's'],
                datasets: [{
                    data: [seconds, 150 - seconds],
                    backgroundColor: ['#FF6384', '#36A2EB'],
                }],
            };

            const options = {
                cutoutPercentage: 80,
                responsive: false,
            };

            // Destroy previous chart if it exists
            if (window.myPie) {
                window.myPie.destroy();
            }

            // Create a new pie chart
            window.myPie = new Chart(ctx1, {
                type: 'doughnut',
                data: data,
                options: options,
            });
        }
    </script>

    <!----- --------->

    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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