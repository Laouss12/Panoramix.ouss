<?php
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'login_db');
$id = $_POST['edit_id'];
$nom = " select nom from etudiantinfo where idetu ='$id'";
$date = " select date from etudiantinfo where idetu ='$id'";
$sexe = " select sexe from etudiantinfo where idetu ='$id'";
$email = " select email from etudiantinfo where idetu ='$id'";
$num = " select num from etudiantinfo where idetu ='$id'";

if (isset($_POST['updatebtn'])){
    $nom = $_POST['edit_nom'];
    $date = $_POST['edit_date'];
    $sexe = $_POST['edit_sexe'];
    $email = $_POST['edit_email'];
    $num = $_POST['edit_num'];

    $query = "UPDATE etudiantinfo SET nom='$nom', date='$date', sexe='$sexe', email='$email', num='$num' WHERE idetu='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        header("Location:../../data.php");
        echo "les données sont bien mises à jour";
    }else{
        echo "les données ne sont pas mises à jour";
    }
}


?>