<!DOCTYPE html>


<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:connection/Login.html');
    }
    $nom = $_SESSION['username'];
    $conn = mysqli_connect("localhost","root","","login_db");

    $query = "SELECT * FROM usertable WHERE name='$nom'";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        $row=mysqli_fetch_assoc($query_run);
        $id= $row['id'];
        $nom= $row['name'];
    }else{
        echo "erreur...";
    }
?>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Panoramix</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    </head>
    <body>
        <!--Header -->
        <section class="header">
            <nav>
            <div class="nav-Profile">
                <input type="hidden" name="my_id" value="<?php echo $id;?>">        
                <ul class="my_ul"><li><?php echo $nom;?></li> 
            </div>
                <div class="nav-links" id="navLinks">
                    <i class="bi bi-x" onclick="hideMenu()"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" onclick="hideMenu()">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>

                    <!-- Menu -->    
                    <ul>
                        <li><a href="consulter/hour.html">HORRAIRES</a></li>
                        <li><a href="#boutique">BOUTIQUE</a></li>
                        <li><a href="#salle">SALLE</a></li>
                        <li><a href="consulter/coach.html">COACH</a></li>
                        <li><a href="connection/php/Logout.php">SE DECONNECTER</a></li>
                    </ul>
                </div>   
                <i class="bi bi-list" id="flor" onclick="showMenu()"></i>
                <svg xmlns="http://www.w3.org/2000/svg" id="flor" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" onclick="showMenu()">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg> 
            </nav>
            
            <div class="text-box">
                <h1><span style="color:rgba(265,0,0,0.6);">B</span>I<span style="color:rgba(265,0,0,0.6);">E</span>N<span style="color:rgba(265,0,0,0.6);">V</span>E<span style="color:rgba(265,0,0,0.6);">N</span>U<span style="color:rgba(265,0,0,0.6);">E</span></h1>
                <p>  Où l'effort ne s'arrête pas </p>
            </div>
        </section>

        <!--Boutique-->
        <section id="boutique" class="boutiqueEtSalle">
            <h1>Nos produits</h1>
            <p id="par">Notre boutique en ligne</p>

            <div class="row">

                <div class="boutiqueEtSalle-col">
                    <img src="image/hehe.jpg">
                    <a href="https://www.myprotein.com/nutrition/protein.list" target="blank" style="cursor: default;">
                     <div class="layer">
                        <h3>Protein</h3>
                     </div>
                    </a>
                </div>
                <div class="boutiqueEtSalle-col">
                   <img src="image/first.jpg">
                    <a href="https://www.dickssportinggoods.com/c/weight-lifting-equipment" target="blank" style="cursor: default;">
                     <div class="layer">
                        <h3>Poids</h3>
                     </div>
                    </a>
                </div>
                <div class="boutiqueEtSalle-col">
                    <img src="image/third.jpg">
                    <a href="https://www.usada.org/athletes/substances/nutrition/" target="blank" style="cursor: default;">
                     <div class="layer">
                        <h3>Nutrition</h3>
                     </div> 
                    </a>
                </div>
            </div>
        </section>
        
        
      
        <!-- Notre Salle-->
        <section id="salle" class="boutiqueEtSalle">
            <h1>Des photos de notre salle</h1>
            <p id="par">notre salle est divisé par trois sections<br> 1er etage: Haut/ Bas du corps <br>2eme etage: Crossfit.</p>

            <div class="row">

                <div class="boutiqueEtSalle-col">
                    <img src="image/efef.jpg">
                    <a href="consulter/Crossfit/CF.html" style="cursor: default;">
                     <div class="layer">
                        <h3>Crossfit</h3>
                     </div>
                    </a>
                </div>
                <div class="boutiqueEtSalle-col">
                    <img src="image/legs.jpg"> 
                    <a href="consulter/Upper Body/UB.html" style="cursor: default;">
                     <div class="layer">
                        <h3>Bas du corps</h3>
                     </div>
                    </a>
                </div>
                <div class="boutiqueEtSalle-col">
                    <img src="image/yep.jpg">   
                    <a href="consulter/Upper Body/UB.html" style="cursor: default;">
                     <div class="layer">
                        <h3>Haut du corps</h3>
                     </div>
                    </a>    
                </div>
            </div>
        </section>
        
        <!-- Commentaires-->
        <section id="Reviews" class="Rev">
            <h1>Reviews</h1>
            <div class="row">
                <div class="Rev-col">
                <img src="image/Clay.jpg" alt="">
                    <div>
                        <p>  
                            Programmes diversifiés, equipements en bon etat, 
                            les gens sont agréables comme dans une communauté amical.
                        </p>
                        <h3>Benamara Billal</h3>       
                    </div>
                </div>
                <div class="Rev-col">
                    <img src="image/Hannah.jpg" alt="">
                        <div>
                            <p> 
                                La salle est bien situé, bonne esthétique. La réduction des frais pour les 
                                étudiants m'a beaucoup aidé. Franchement, j'aime bien.
                            </p>
                            <h3>Hannah Baker</h3>       
                        </div>
                </div>
            </div>
        </section>


        <!--------------Footer----------->
        <section class="footer">
            <h4>A propos de nous</h4>
            <p> Chez Panoramix, nous croyons à la discipline et au travail acharné. <br>
                Nous offrons un environnement positif et adéquat pour maintenir cet état d'esprit.
            </p>
            <div class="icons">
                <a href="#" class="icon-10 facebook" title="Facebook"><svg viewBox="0 0 512 512"  class="social"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a>
                <a href="#" class="icon-26 twitter" title="Twitter"><svg viewBox="0 0 512 512"  class="social"><path d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"/></svg><!--[if lt IE 9]><em>Twitter</em><![endif]--></a>
                <a href="#" class="icon-14 googleplus" title="GooglePlus"><svg viewBox="0 0 512 512" class="social"><path d="M179.7 237.6L179.7 284.2 256.7 284.2C253.6 304.2 233.4 342.9 179.7 342.9 133.4 342.9 95.6 304.4 95.6 257 95.6 209.6 133.4 171.1 179.7 171.1 206.1 171.1 223.7 182.4 233.8 192.1L270.6 156.6C247 134.4 216.4 121 179.7 121 104.7 121 44 181.8 44 257 44 332.2 104.7 393 179.7 393 258 393 310 337.8 310 260.1 310 251.2 309 244.4 307.9 237.6L179.7 237.6 179.7 237.6ZM468 236.7L429.3 236.7 429.3 198 390.7 198 390.7 236.7 352 236.7 352 275.3 390.7 275.3 390.7 314 429.3 314 429.3 275.3 468 275.3"/></svg><!--[if lt IE 9]><em>GooglePlus</em><![endif]--></a>
                <a href="#" class="icon-15 instagram" title="Instagram"><svg viewBox="0 0 512 512" class="social"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"/><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"/><circle cx="351.5" cy="160.5" r="21.5"/></g></svg><!--[if lt IE 9]><em>Instagram</em><![endif]--></a>
                
            </div>
        </section>
        
        <!--------------JavaScript Nav Links---------------> 
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px";
            }
        </script>
            
    </body> 
</html>






