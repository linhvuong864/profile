<?php
include 'dbcon.php';
if( isset($_POST["submit"]) && $_POST["user_email"] != '' && $_POST["user_password"] != '' ) {
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $sql = "SELECT * FROM user WHERE user_email='$user_email' AND user_password ='$user_password'";
    $user = mysqli_query($conn, $sql);
    if(mysqli_num_rows($user) > 0) {
       header("Location: index.html");
    }else {
        echo "DANG NHAP THAT BAI";
    }
}
?>