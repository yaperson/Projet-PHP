<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">   <!--intégre du css--> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--intégre du css--> 
    <link rel="sgorcut icon" href="images/logo2.jpg" type="image/x-icon"> <!--icone-->
    <title>Projet | Accueil</title> <!--nom de la page-->
    </head>
    <body>
    <?php 
          include("PHP/nav.php"); 
    ?>
    <h1 align="center">Scan</h1>

    <?php

        $fileName = $_GET['fich'];
        echo 'Effacer '. $fileName .'...';
        unlink ('fichier/'.$fileName);
    ?>

    <a href="scan.php"> Scan </a>
    <?php 
      include("PHP/footer.php"); 
    ?>


    </body>
</html>




