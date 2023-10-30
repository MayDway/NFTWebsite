<?php
include("connection/db.php");
session_start();
if(isset($_POST["login"])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    var_dump($password);


    $sql_run1 = mysqli_query($conn,"SELECT * FROM `user` WHERE email = '$email'");
    $row = mysqli_fetch_array($sql_run1);
    var_dump($row["password"]);
    if($password == $row['password']){
        $_SESSION['user'] = $row['username'];
        echo "<script>alert('Successfully Logined....');</script>";
        echo "<script>window.location.href='Client/index.php';</script>";
    }else{
        echo "<script>alert('Email or Password is incorrect....');</script>";
        echo "<script>window.location.href='Client/login.php';</script>";
    }

}

?>