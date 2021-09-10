<?php

session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'login_db');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name ='$name' && password ='$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($name == "admin" || $pass == "123456"){
    $_SESSION['username'] = "admin";
    header('location:../../admin/admin.html');
}else if($num == 1){
    $_SESSION['username'] = $name;
    header('location:../../Home.php');
}else{
    header('location:../oops2.html');
}
?>