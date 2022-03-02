<?php
session_start();
include("connection.php");
header("location:login.php");
$name = $_POST['user'];
$password = $_POST['password'];

$s = " select * from usertable where name = '$name'";
$result = mysqli_query($connect,$s);
$num = mysqli_num_rows($result);
//echo "$num is there";

if($num == 1){
    $_SESSION['status'] = "Username Already Taken!!!";
    header("location:login.php");
}else{
    $reg=" insert into usertable(name , password) values ('$name','$password')";
    mysqli_query($connect,$reg);
    $_SESSION['status'] = "User Registered Succesfully";
}

?>