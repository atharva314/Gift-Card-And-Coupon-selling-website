<?php
include("connection.php");
session_start();
$name = $_POST['user'];
$password = $_POST['password'];

$s = " select * from usertable where name = '$name' && password='$password'";
$result = mysqli_query($connect,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header("location:index.php");
}else{
    $_SESSION['status'] = "Invalid credentials!!";
    header("location:login.php");
}

?>