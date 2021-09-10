
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifier</title>
	<link rel="stylesheet" href="../../admin.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <a href="../../admin.html"><h2>Admin</h2></a>
        <ul>
            <li><a href="../../gestion.php"><i class="fas fa-user"></i>Retour</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header">Modifier infos etudiants.</div>  
        <?php
            $conn = mysqli_connect("localhost","root","","login_db");
            if(isset($_POST['edit2_btn']))
            {
                $id = $_POST['edit2_id'];
                $query = "SELECT * FROM etudiantinfo WHERE idetu=$id";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row){
                    ?>
        
                <div class="info">
                <form action="EDetu1.php" method="post">

                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Naissance</th>
                          <th>sexe</th>
                          <th>email</th>
                          <th>Telephone</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <input type="hidden" name="edit_id" value="<?php echo $row['idetu']; ?>">
                          <td><input type="text" name="edit_nom" value="<?php echo $row['nom']; ?>"></td>
                          <td><input type="text" name="edit_date" value="<?php echo $row['date']; ?>"></td>
                          <td><input type="text" name="edit_sexe" value="<?php echo $row['sexe']; ?>"></td>
                          <td><input type="text" name="edit_email" value="<?php echo $row['email']; ?>"></td>
                          <td><input type="text" name="edit_num" value="<?php echo $row['num']; ?>"></td>
                        </tr>
                      </tbody>
                    </table>

                    <a href="../../data.php"><button type="button" class="btn btn-primary">Annuler</button></a>
                    <button type="submit" name="updatebtn" class="btn btn-primary">Mettre à jour</button>
                  
                </form>

                        <?php
                        }
                    }
                    ?>

                </div>
        
    </div>
</div>
    
</body>
</html>