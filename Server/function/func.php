<?php
include("../connection/db.php");
// session_start();

function setdata($token , $connectionId){
    global $conn;
    $sql = "INSERT INTO `user`(user_token,user_connection_id) VALUES ('$token','$connectionId')";
    $run = mysqli_query($conn, $sql);
}

function updatedata($token , $connectionId){
    global $conn;
    $sqll = "UPDATE `user` SET user_connection_id = '$connectionId' WHERE user_token = '$token'";
    $result = mysqli_query($conn, $sqll);
}