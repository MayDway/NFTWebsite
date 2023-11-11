<?php
include("connection/db.php");
session_start();
$user_id = $_SESSION["user_id"];
$sql = "UPDATE `user` SET login_status='' WHERE id='$user_id'";
$result = mysqli_query($conn,$sql);
session_destroy();
echo "<script>alert('Logout Successfully....');</script>";
echo "<script>window.location.href='Client/index.php';</script>";
?>