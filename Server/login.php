<?php
include("connection/db.php");
session_start();
if(isset($_POST["login"])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // var_dump($password);


    $sql_run1 = mysqli_query($conn,"SELECT * FROM `user` WHERE email = '$email'");
    $row = mysqli_fetch_array($sql_run1);
    $user_id = $row['id'];
    // var_dump($row["password"]);
    if($password == $row['password']){
        $user_token = md5(uniqid());
        $_SESSION['user_id'] = $user_id;
        $_SESSION['token'] = $user_token;

        $sql = "UPDATE `user` SET user_token = '$user_token', login_status= 'active' WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);

        echo "<script>alert('Successfully Logined....');</script>";
        echo "<script>window.location.href='Client/index.php';</script>";
    }else{
        echo "<script>alert('Email or Password is incorrect....');</script>";
        echo "<script>window.location.href='Client/login.php';</script>";
    }

}

?>