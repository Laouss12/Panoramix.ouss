<?php

session_start();

$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'login_db');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:oops.html');
    echo "deja existant!";
}else{
    header('location:Thankyou.html');
    $reg= "insert into usertable(name,password) values ('$name' , '$pass')";
    mysqli_query($con, $reg);
    echo "C'est bon !";
}

?>