<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require_once './article.php';
   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Acceuil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <script>
        function getAlls(){
            var result = "<?php   include('affiche.php'); getAll();?>"
            document.getElementById("afichage").innerHTML = result;
            
        }

        function getSports(){
            var result = "<?php   getSport();?>"
            document.getElementById("afichage").innerHTML = result;
            
        }
        

        function geSantes(){
            var result = "<?php   getSante();?>"
            document.getElementById("afichage").innerHTML = result;
        }
        function getEducations(){
            var result = "<?php   getEducation();?>"
            document.getElementById("afichage").innerHTML = result;
        }

        function getPolitiques(){
            var result = "<?php   getPolitique();?>"
            document.getElementById("afichage").innerHTML = result;
        }


    </script>
    </head>
    <body>
        <header>
            <center>
                <h1>SITE D'ACTUALITÉ DU MIABD</h1>
            </center>
            
            <nav>
            <?php

                


                echo '<a href="index.php" onclick="getAlls();">Toutes les actualités </a>';
                

                echo '<a href="index.php" onclick="getSports();"> SPORT </a>';
                echo '<a href="index.php" onclick="getSantes();"> SANTÉ </a>';
                echo '<a href="index.php" onclick="getEducations();"> ÉDUCATION </a>';
                echo '<a href="index.php" onclick="getPolitiques();">POLITIQUE</a>';
            ?>
            </nav>
        </header>
                
                <?php
                    echo '<div class="wrapper2">
                    <div class="product-info">
                    <div class="product-text">';

                     echo '<div id="affichage">
                     </div>';

                    echo '</div></div></div>';
                ?>
    </body>
</html>