<?php
include 'dbcon.php';
if( isset($_POST["submit"]) && $_POST["user_name"] != '' && $_POST["user_email"] != '' && $_POST["user_password"] != '' ) {
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $sql ="SELECT * FROM user WHERE user_name='$user_name'";
    $old = mysqli_query($conn,$sql);
    if( mysqli_num_rows($old) > 0){
        header("location:register.php");
    }
    $sql = "INSERT INTO user (user_name,user_email,user_password) VALUES ('$user_name','$user_email','$user_password')";
    mysqli_query($conn,$sql);
    header("Location: index.html");
}else {
    header("location:register.php");
}
?>