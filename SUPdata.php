<?php
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'login_db');

if (isset($_POST['delete_btn'])){

    $id = $_POST['delete_id'];

    $query = "DELETE FROM userinfo WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        header("Location:../../data.php");
        echo "c'est bon...";
    }else{
        echo "erreur...";
    }
}


?>