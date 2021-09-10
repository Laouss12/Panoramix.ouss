<?php
  $nom = $_POST['nom'];
  $date = $_POST['date'];
  $sexe = $_POST['sexe'];
  $email = $_POST['email'];
  $num = $_POST['num'];
  $xp = $_POST['xp'];

  //connexion a la bdd
  $conn = new mysqli('localhost','root','','login_db');
  if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
  }else{
    header('location:../creer_compte/signUp.html');
    $stmt = $conn->prepare("insert into userinfo(nom, date, sexe, email, num, xp)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis",$nom, $date, $sexe, $email, $num, $xp);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  }