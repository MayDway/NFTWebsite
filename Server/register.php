<?php
include("connection/db.php");
if(isset($_POST["register"])){
    $account_id = mysqli_real_escape_string($conn, $_POST['account_id']); // add md //
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $c_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $sql_run=mysqli_query($conn,"SELECT * FROM `user`");
    $length = mysqli_num_rows($sql_run);

    // $array = [];
    // while ($row = mysqli_fetch_assoc($sql_run)) {
    //     $array[] = $row['account_number'];
    // }
    // do {
    //     $account_id = rand(10000, 99999); // Adjust the range as needed
    // } while (in_array($account_id, $array));

    // $acc_id = $name . $account_id;


    if ($password != $c_password) {
        echo "<script>alert('Recheck Password Again!!!');</script>";
        echo "<script>window.location.href='Client/creatacc.html';</script>";
    }

    $sql_run1 = mysqli_query($conn,"SELECT * FROM `user` WHERE email = '$email'");
    $row = mysqli_num_rows($sql_run1);
    if ($row > 1) {
        echo "<script>alert('This email is already registered!!!');</script>";
    } else {

    $sql = "Insert into `user`(account_number,usertype,username,image,email,password,phone,balance,status,control) Values('$account_id','customer','$name','','$email','$password','$phone','','pending','random')";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('Successfully Registered....');</script>";
    echo "<script>window.location.href='Client/login.php';</script>";
    }


}
?>