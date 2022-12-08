<?php
    require_once('arenas.class.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Beach Football</title>
</head>
<body>
   
<img src="assets/tree.png" alt="tree" class="left-img">
    <div class="main-container">
        <img src="assets/right.png" alt="right" class="right-img">
      
        <header>
            <nav>
            <img src="assets/logo.png" alt="logo">
                <ul class="ul-nav">
                    <li><a href="#" class="first">Discover</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">How it Works</a></li>
                </ul>

                <ul class="ul-login">
                    <li><a href="#">Login</a></li>
                </ul>
            </nav>
        </header>
      
        <div class="parent-container">
            <div class="child-container">
                <span>Make New Friends over</span>
                <h1>Beach Football</h1>
                <p>Challenge your friends and play together a game 
                of Beach Football at your nearest beach.</p>
            </div>
            <div class="search-container">
                <i class="fa-solid fa-location-dot fa-2xl"></i>

                <?php
                    $arenaList = new ViewArenas();
                    //On crée une instance
                    $rows = $arenaList->getArenas();
                    //On rècupère la tableau
                   
                   // print_r($rows[1]["arena"]);
                   //le print_r : retourne l'arène avec son lien gmap
                ?>

                <select id="arenaList">
                    <?php
                        foreach($rows as $row){
                            echo "<option value='" . $row["arenaid"] . "'>" . $row["arena"] . "</option>";
                        } 
                    ?>   
                </select>
 
                <script>

                    $( "#arenaList" ) //on aaccède à notre liste d'option
                    .change(function() {
                        var str = "";
                        //On accède au option de la liste
                        $( "#arenaList option:selected" ).each(function() {

                            //on recupère la chaine de caractère sélectionné de nos options, on stock dans la variable str. 
                        str += $( this ).text();
                        });
                          //on retourne la variable dans notre balise .returnArena
                        $( ".returnArena" ).text( str );
                        // Problème rencontré : les arènes sont retournées sans leur lien gmap.
                    })
                    .trigger( "change" );
                    </script>

                <span>></span>   
            </div>
            <div class="returnArena"></div>
            <p><strong>Popular Beach Arenas:</strong>Virginia, California, Texas</p>
        </div>
  
    </div>
    
</body>
</html>