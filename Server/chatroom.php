<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connection/db.php");
session_start();
$idd = $_SESSION['user_id'];
$sql = "SELECT * FROM `user` WHERE id = '$idd'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$type = $row["usertype"];
$user_name = $row["username"];
// if (!isset($_SESSION["user_id"]) || $type == 'customer') {
//     header('location:Client/cs.php');
// }
// include("connection/db.php");
// session_start();

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

    <!-- <link rel="stylesheet" type="text/css" href="vendor-front/parsley/parsley.css"/> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor-front/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- <script type="text/javascript" src="vendor-front/parsley/dist/parsley.min.js"></script> -->

    <style type="text/css">
		html,
		body {
		  height: 100%;
		  width: 100%;
		  margin: 0;
		}
		#wrapper
		{
			display: flex;
		  	flex-flow: column;
		  	height: 100%;
		}
		#remaining
		{
			flex-grow : 1;
		}
		#messages {
			height: 200px;
			background: whitesmoke;
			overflow: auto;
		}
		#chat-room-frm {
			margin-top: 10px;
		}
		#user_list
		{
			height:450px;
			overflow-y: auto;
		}

		#messages_area
		{
			height: 650px;
			overflow-y: auto;
			background-color:#e6e6e6;
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
                            <a class="navbar-brand" href="index.php"> <img src="Client/img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"><i class="fas fa-bars"></i></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="Client/index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Client/market.php">Market</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="chatroom.php">Customer Service</a>
                                    </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="Client/term.php">Terms & Condition</a>
                                    </li>

                                 <li class="nav-item">
                                        <a class="nav-link" href="Client/qanda.php">Q & A</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                       
                                    </li>
                                    <li class="nav-item dropdown">

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                            <a class="dropdown-item" href="Client/elements.php">Elements</a>
                                        </div>
                                    </li>
                                   
                                </ul>
                            </div>
                            <?php
                            if(isset($_SESSION['user_id'])) {
                            ?>
                            <div class="btn-group">
                                <button type="button" class="btn_1 btn-sm"><img src="Client/img/user-header.png" width="20px" height="20px"><?php echo $user_name; ?></button>
                                <button type="button" class="btn_1 btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profile.php">Profile Setting</a>
                                    <!-- <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>-->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
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

        <!-- <div class="container"> -->
		<br />
        <!-- <h3 class="text-center">PHP Chat Application using Websocket - Display User with Online or Offline Status</h3> -->
        <br />

        <div class="container" style="margin-top: 10%;">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-5" style="background-color: #f1f1f1; height: 100%; padding-bottom: 20px; border-right: 1px solid #ccc; border-top-left-radius: 5px;">
                    
                    <?php
                    $login_user_id = $_SESSION['user_id']; 
                    $token = $_SESSION['token'];
                    $sql = "SELECT * FROM `user` WHERE id='$login_user_id'";
                    $result = mysqli_query($conn, $sql);
                    $value = mysqli_fetch_array($result);
                    $usertype = $value["usertype"];
                    

                    // foreach($_SESSION['user'] as $key => $value) {
                    //     $login_user_id = $value['id'];
                    ?>
                    <input type="hidden" name="login_user_id" id="login_user_id" value="<?php echo $login_user_id?>" />
                    <input type="hidden" name="is_active_chat" id="is_active_chat" value="No" />
                    <div class="mt-3 mb-3 text-center">
                        <?php if($value['image'] == '') {
                            echo "<img src='Client/img/userprofile.jpg' alt='' class='img-fluid rounded-circle img-thumbnail' width='150' />";
                        } else {
                           ?>
                            <img src="<?php echo $value['image']; ?>" alt="" class="img-fluid rounded-circle img-thumbnail" width="150" />
                        <?php
                        }
                        ?>

                        <h3 class="mt-2"><?php echo $value['username']; ?></h3>
                        <a href="profile.php" class="btn btn-info mt-2 mb-2">Edit</a>
                        <a href="logout.php" class="btn btn-danger mt-2 mb-2">Logout</a>
                    </div>
                    <?php
                    // }

                    // $user_object = new ChatUser;
                    // $user_object->setUserId($login_user_id);
                    // $user_data = $user_object->get_user_all_data_with_status_count();
                    if($usertype == 'agent'){
                        $sqll = "SELECT id , username, image, login_status , (SELECT COUNT(*) FROM chat_message WHERE to_user_id = '$login_user_id' AND from_user_id = `user`.id AND status = 'No') AS count_status FROM `user` WHERE usertype='customer'";
                        $resultl = mysqli_query($conn, $sqll);
                        $row = mysqli_fetch_array($resultl);
                    } else if($usertype == 'customer'){
                        $sqll = "SELECT id , username, image, login_status , (SELECT COUNT(*) FROM chat_message WHERE to_user_id = '$login_user_id' AND from_user_id = `user`.id AND status = 'No' ) AS count_status FROM `user` WHERE usertype='agent'";
                        $resultl = mysqli_query($conn, $sqll);
                        $row = mysqli_fetch_array($resultl);
                    }
                    // $sqll = "SELECT id , username, image, login_status , (SELECT COUNT(*) FROM chat_message WHERE to_user_id = '$login_user_id' AND from_user_id = `user`.id AND status = 'No' AND usertype='$usertype') AS count_status FROM `user`";
                    // $resultl = mysqli_query($conn, $sqll);
                    // $row = mysqli_fetch_array($resultl);


                    ?>
                    <div class="list-group" style="max-height: ''; margin-bottom:10px; overflow-y:scroll; -webkit-overflow-scrolling: touch;">
                        <?php
                            // foreach($row as $user_data) {
                                while($row = mysqli_fetch_array($resultl)) {
                                $icon = '<i class="fa fa-circle text-danger"></i>';

                                if($row['login_status'] == 'active') {
                                    $icon = '<i class="fa fa-circle text-success"></i>';
                                }
                                // var_dump($row['id']);
                                // echo $row['id'];
                                if($row['id'] != $login_user_id) {
                                    if($row['count_status'] > 0) {
                                        $total_unread_message = '<span class="badge badge-danger badge-pill">' . $row['count_status'] .'</span>';
                                    }
                                    else {
                                        $total_unread_message = '';
                                    }

                                    if($value['image'] == '') {

                                        // echo "<img src='Client/img/userprofile.jpg' alt='' class='img-fluid rounded-circle img-thumbnail' width='150' />";
                                        
                                        echo "
                                            <a class='list-group-item list-group-item-action select_user'
                                                style='cursor:pointer' data-userid = '" . $row['id'] . "'>
                                                <img src='Client/img/userprofile.jpg' class='img-fluid rounded-circle img-thumbnail' width='100' />
                                                <span class='ml-1'>
                                                    <strong>
                                                        <span id='list_user_name_".$row["id"]."'>".$row["username"]."</span>
                                                        <span id='userid_".$row["id"]."'>".$total_unread_message."</span>
                                                    </strong>
                                                </span>
                                                <span class='mt-2 float-right' id='userstatus_".$row['id']."'>".$icon."</span>
                                            </a>
                                            ";
                                    } else {

                                        echo "
                                        <a class='list-group-item list-group-item-action select_user'
                                            style='cursor:pointer' data-userid = '" . $row['id'] . "'>
                                            <img src='".$row['image']."' class='img-fluid rounded-circle img-thumbnail' width='100' />
                                            <span class='ml-1'>
                                                <strong>
                                                    <span id='list_user_name_".$row["id"]."'>".$row["username"]."</span>
                                                    <span id='userid_".$row["id"]."'>".$total_unread_message."</span>
                                                </strong>
                                            </span>
                                            <span class='mt-2 float-right' id='userstatus_".$row['id']."'>".$icon."</span>
                                        </a>
                                        ";                                    
                                    }
                            }
                        }
                                ?>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-7 bg-light" style="border-top-right-radius: 5px;">
                        <br>
                        <h3 class="text-center text-dark">Realtime One to One Chat App Using Websockets with php</h3>
                        <hr>
                        <br>
                        <div id="chat_area"></div>
                </div>
            </div>
        </div>
    



                                    

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

            var  recevie_userid = "";

            var htmls = "";

            var conn = new WebSocket('ws://localhost:8080?token=<?php echo $token; ?>');
            conn.onopen = function(e) {
                console.log("Connection established!");
            };

            conn.onmessage = function(e) {
                var data = JSON.parse(e.data);

                var row_class = '';
                var background_class = '';

                if(data.from == 'Me') {
                    row_class = 'row justify-content-start';
                    background_class = 'alert-primary';
                } else {
                    row_class = 'row justify-content-end';
                    background_class = 'alert-success';
                }

                if(recevie_userid == data.userId || data.from == 'Me') {
                    if($('#is_active_chat').val() == 'Yes'){
                    htmls = htmls + `
                        <div class="`+row_class+`">
                            <div class = "col-sm-10">
                                <div class = "shadow-sm alert `+background_class+`">
                                    <b>`+data.from+` - </b>`+data.msg+`<br/>
                                    <div class = "text-right">
                                        <small><i>`+data.datetime+`</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                        `;

                        $('#messages_area').append(htmls);
                        $('#messages_area').scrollTop($('#messages_area')[0].scrollHeight);
                        $('#chat_message').val("");
                    }
                }
                else {
                    var count_chat = $('#userid_'+data.userId).text();
                    if(count_chat == '') {
                        count_chat = 0;
                    }
                    count_chat++;
                    $('#userid_'+data.userId).html('<span class ="badge badge-danger badge-pill">'+count_chat+'</span>');
                    console.log(count_chat);
                }
                console.log(e.data);
            };

            conn.onclose = function(e) {
                console.log('connection close');
            };

            function make_chat_area(user_name){
                var html = `
                <div class="card">
                    <div class="card-header">
                        <div class = "row">
                            <div class = "col col-sm-6">
                                <b>Chat with <span class="text-danger" id="chat_user_name">`+user_name+`</span></b>
                            </div>
                            <div class = "col col-sm-6 text-right">
                                <a href="#" class="btn btn-success btn-sm"></a>
                                <button type="buttton" class="close" id="close_chat_area" data-dismiss="alert" area-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" id="messages_area">

                    </div>
                </div>
                
                <form id="chat_form" method="POST" data-parsley-errors-container="#validation_error">
                    <div class="input-group mb-3" style="height:7vh">
                        <textarea class="form-control" id="chat_message" name="chat_message" placeholder="Type Message Here" data-parsley-maxlength="1000" 
                            data-parsley-pattern="/^[a-zA-Z0-9 ]+$/" required >
                        </textarea>
                        <div class="input-group-append">
                            <button type="submit" name="send" id="send" class="btn btn-primary">
                                <i class="fa fa-paper-plane"></i> 
                            </button>
                        </div>
                    </div>
                    <div id="validation_error"></div>
                    <br>
                </form>
                `;

                $('#chat_area').html(html);

                // $('#chat_form').parsley();
            }

            $(document).on('click','.select_user', function(){
                receiver_userid = $(this).data('userid');

                var from_user_id = $('#login_user_id').val();
                var receiver_user_name = $('#list_user_name_'+receiver_userid).text();
                $('.select_user.active').removeClass('active');
                $(this).addClass('active');
                make_chat_area(receiver_user_name);
                $('#is_active_chat').val('Yes');

                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data:{action:'fetch_chat', to_user_id:receiver_userid, from_user_id:from_user_id},
                    dataType:"JSON",
                    success : function(data)
                    {
                        console.log(data.length);
                        console.log(data);
                        if(data.length > 0) {
                            // var htmls = '';
                            for(var count = 0; count < data.length; count++){
                                var row_class = '';
                                var background_class = '';
                                var user_class = '';

                                if(data[count].from_user_id == from_user_id){
                                    row_class = 'row justify-content-start';
                                    background_class = 'alert-primary';
                                    user_name = 'Me';

                                } else {
                                    row_class = 'row justify-content-end';
                                    background_class = 'alert-success';
                                    user_name = data[count].from_user_name; 
                                }
                                htmls += `
                                    <div class = "`+row_class+`">
                                        <div class="col-sm-10">
                                            <div class ="shadow alert `+background_class+`">
                                                <strong>`+user_name+` - </strong>
                                                `+data[count].chat_message+`<br>
                                                <div class = "text-right">
                                                    <small><i>`+data[count].timestamp+`</i></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `;
                            }

                            $('#userid_'+receiver_userid).html('');

                            $('#messages_area').html(htmls);

                            $('#messages_area').scrollTop($('#messages_area')[0].scrollHeight);

                        }
                    },
                    error: function(error) {
                        console.log(error.status);
                        console.log(error);
                    }
                });
            });

            $(document).on('click','#close_chat_area', function(){
                $('#chat_area').html('');

                $('.select_user.active').removeClass('active');
            });

            $(document).on('submit','#chat_form',function(event){
                event.preventDefault();
                // if($('#chat_form').parsley().isValid()){
                    var user_id = $('#login_user_id').val();
                    var message = $('#chat_message').val();
                    console.log(user_id);
                    console.log(receiver_userid);
                    var data = {
                        userId : user_id,
                        msg: message,
                        receiver_userid: receiver_userid,
                        command: 'Private'
                    };
                    conn.send(JSON.stringify(data));
                // }
            })

        });
    </script>
</body>

</html>