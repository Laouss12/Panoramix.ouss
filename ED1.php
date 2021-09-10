<?php
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'login_db');
$id = $_POST['edit_id'];
$name = " select name from usertable where id ='$id'";
$pass = " select password from usertable where id ='$id'";

if (isset($_POST['updatebtn'])){
    $name = $_POST['edit_nom'];
    $pass = $_POST['edit_password'];

    $query = "UPDATE usertable SET name='$name', password='$pass' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        header("Location:../../gestion.php");
        echo "les données sont mises à jour";
        
    }else{
        echo "les données ne sont pas mises à jour";
    }
}


?>