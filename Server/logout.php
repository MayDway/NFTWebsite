<?php
include("connection/db.php");
session_start();
session_destroy();
echo "<script>alert('Logout Successfully....');</script>";
echo "<script>window.location.href='Client/index.php';</script>";
?>