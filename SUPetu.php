<?php
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'login_db');

if (isset($_POST['delete2_btn'])){

    $id = $_POST['delete2_id'];

    $query = "DELETE FROM etudiantinfo WHERE idetu='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        header("Location:../../data.php");
        echo "c'est bon...";
    }else{
        echo "erreur...";
    }
}


?>