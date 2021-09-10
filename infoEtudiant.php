<?php
  $nom = $_POST['nom'];
  $date = $_POST['date'];
  $sexe = $_POST['sexe'];
  $email = $_POST['email'];
  $num = $_POST['num'];

  //connexion a la bdd
  $conn = new mysqli('localhost','root','','login_db');
  if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
  }else{
    header('location:signUp.html');
    $stmt = $conn->prepare("insert into etudiantinfo(nom, date, sexe, email, num)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$nom, $date, $sexe, $email, $num);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  }