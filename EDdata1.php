<?php
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'login_db');
$id = $_POST['edit_id'];
$nom = " select nom from userinfo where id ='$id'";
$date = " select date from userinfo where id ='$id'";
$sexe = " select sexe from userinfo where id ='$id'";
$email = " select email from userinfo where id ='$id'";
$num = " select num from userinfo where id ='$id'";
$xp = " select xp from userinfo where id ='$id'";

if (isset($_POST['updatebtn'])){
    $nom = $_POST['edit_nom'];
    $date = $_POST['edit_date'];
    $sexe = $_POST['edit_sexe'];
    $email = $_POST['edit_email'];
    $num = $_POST['edit_num'];
    $xp = $_POST['edit_xp'];

    $query = "UPDATE userinfo SET nom='$nom', date='$date', sexe='$sexe', email='$email', num='$num', xp='$xp' WHERE id='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        header("Location:../../data.php");
        echo "les données sont bien mises à jour";
    }else{
        echo "les données ne sont pas mises à jour";
    }
}


?>