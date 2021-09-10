<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="admin.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <a href="admin.html"><h2>Admin</h2></a>
        <ul>
            <li><a href="#"><i class="fas fa-user"></i>Gérer les comptes</a></li>
            <li><a href="data.php"><i class="fas fa-address-book"></i>Data</a></li>
            <li><a href="code.html"><i class="fas fa-code"></i>Code</a></li>
        </ul> 
        <div class="home">
          <a href="../Index.html"><i class="fas fa-home"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">Modifier ou supprimer un compte.</div>  
        <div class="info">

          <?php
            $conn = mysqli_connect("localhost","root","","login_db");

            $query = "SELECT * FROM usertable";
            $query_run = mysqli_query($conn,$query);


          ?>
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th> ID </th>
                        <th> Username </th>
                        <th>Password</th>
                        <th>EDIT </th>
                        <th>DELETE </th>
                      </tr>
                    </thead>
                    <tbody>
                 
                    <?php
                      if(mysqli_num_rows($query_run)>0){
                        while($row = mysqli_fetch_assoc($query_run)){
                          ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <form action="php/modifier/ED.php" method="post"> 
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button  type="submit" name="edit_btn" class="btn btn-success"> Modifier</button>
                            </form>
                        </td>
                        <td>
                          <form action="php/supprimer/SUP.php" method="post">
                              <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                              <button  type="submit" name="delete_btn" class="btn btn-danger"> Supprimer</button>
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
                <div class="footer">
                    <a href="../connection/Login.html"><button class="btn btn-primary">Fin</button></a>
                </div>
      </div>
    </div>
</div>
</body>
</html>