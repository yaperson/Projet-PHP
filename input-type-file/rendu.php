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
    <h1>Opperation résussi !</h1>
    <?php

        echo '<br>name = '     . $_FILES['fileToUpload'] ['name'] ;
        echo '<br>size = '     . $_FILES['fileToUpload'] ['size'] ;
        echo '<br>type = '     . $_FILES['fileToUpload'] ['type'] ;
        echo '<br>tmp_name = ' . $_FILES['fileToUpload'] ['tmp_name'] ;
        echo '<hr>';
        $_file_name = $_FILES['fileToUpload'] ['name'] ;
        $file_tmp   = $_FILES['fileToUpload'] ['tmp_name'] ;

        var_dump($_FILES);
        var_dump($_FILES ['fileToUpload']);
        move_uploaded_file($file_tmp,"fichier/".$_file_name);

        $target_dir = "fichier/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
     /*   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));*/
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




