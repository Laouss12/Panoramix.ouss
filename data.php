<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informations</title>
	<link rel="stylesheet" href="admin.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <a href="admin.html"><h2>Admin</h2></a>
        <ul>
            <li><a href="gestion.php"><i class="fas fa-user"></i>Gérer les comptes</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Data</a></li>
            <li><a href="code.html"><i class="fas fa-code"></i>Code</a></li>
        </ul> 
        <div class="home">
          <a href="../Index.html"><i class="fas fa-home"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Où l'effort ne s'arrête pas</div>  
        <div class="info">
        <h2>Informations clients:</h2>
        <?php
            $conn = mysqli_connect("localhost","root","","login_db");

            $query = "SELECT * FROM userinfo";
            $query_run = mysqli_query($conn,$query);


          ?>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th> ID </th>
                        <th> Nom </th>
                        <th> Naissance</th>
                        <th> sexe </th>
                        <th> email </th>
                        <th> Telephone </th>
                        <th> Experience </th>
                        <th> Edit </th>
                        <th> Delete </th>
                      </tr>
                    </thead>
                    <tbody>
                 
                    <?php
                      if(mysqli_num_rows($query_run)>0){
                        while($row = mysqli_fetch_assoc($query_run)){
                          ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['sexe']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['num']; ?></td>
                        <td><?php echo $row['xp']; ?></td>
                        <td>
                            <form action="php/modifier/EDdata.php" method="post"> 
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button  type="submit" name="edit_btn"> Modifier</button>
                            </form>
                        </td>
                        <td>
                          <form action="php/supprimer/SUPdata.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button  type="submit" name="delete_btn">Supprimer</button>
                          </form>
                        </td>
                      </tr>
                    <?php
                    }
                      }else{
                        echo "No Record Found";
                      }
                    ?>
    
                    </tbody>
                    </table>


                    <h2>Informations etudiants:</h2>
        <?php
            $conn = mysqli_connect("localhost","root","","login_db");

            $query = "SELECT * FROM etudiantinfo";
            $query_run = mysqli_query($conn,$query);
          ?>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th> ID </th>
                        <th> Nom </th>
                        <th> Naissance</th>
                        <th> sexe </th>
                        <th> email </th>
                        <th> Telephone </th>
                        <!--<th> Certificat </th>-->
                        <th> Edit </th>
                        <th> Delete </th>
                      </tr>
                    </thead>
                    <tbody>
                 
                    <?php
                      if(mysqli_num_rows($query_run)>0){
                        while($row = mysqli_fetch_assoc($query_run)){
                          ?>
                      <tr>
                        <td><?php echo $row['idetu']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['sexe']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['num']; ?></td>
                        <!-- <td><?php if($row['cetificat'] == null){
                            echo "non";
                        }else{
                            echo "oui";
                        }; ?></td>-->
                        <td>
                            <form action="php/modifier/EDetu.php" method="post"> 
                                <input type="hidden" name="edit2_id" value="<?php echo $row['idetu']; ?>">
                                <button  type="submit" name="edit2_btn"> Modifier</button>
                            </form>
                        </td>
                        <td>
                          <form action="php/supprimer/SUPetu.php" method="post">
                            <input type="hidden" name="delete2_id" value="<?php echo $row['idetu']; ?>">
                            <button  type="submit" name="delete2_btn"> Supprimer</button>
                          </form>
                        </td>
                      </tr>
                    <?php
                    }
                      }else{
                        echo "No Record Found";
                      }
                    ?>
    
                    </tbody>
                    </table>
      </div>
      <div class="footer">
                    <a href="../connection/Login.html"><button class="btn btn-primary">Fin</button></a>
      </div>
    </div>
</div>
</body>
</html>