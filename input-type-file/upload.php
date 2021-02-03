<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css">   <!--intégre du css--> 
    <link rel="sgorcut icon" href="images/logo2.jpg" type="image/x-icon"> <!--icone-->
    <title>Projet | Accueil</title> <!--nom de la page-->
    </head>
    <body>
    <?php 
          include("PHP/nav.php"); 
    ?>
    <h1 align="center">Upload</h1>

    <form action="rendu.php" method="post" enctype="multipart/form-data">
    Selectionner un fichier upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Files" name="submit">
    </form>


    <a href="scan.php"> Visualisation des fichiers présents</a>
    <?php 
      include("PHP/footer.php"); 
    ?>

    <script>
            $(function(){
          $("#monBouton").click(function(){
              $("html, body").animate({scrollTop: 0},"slow");
          });
      });
    </script>
    </body>
</html>




