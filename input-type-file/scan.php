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
    <header>
        <?php 
          include("PHP/nav.php"); 
        ?>
      </header>
    <h1 align="center">Scan</h1>

    <?php
        $dir    = './fichier';
        $files1 = scandir($dir);
        $files2 = scandir($dir, 1);

        echo "Votre IP publique : ". $_SERVER['REMOTE_ADDR'] ;

    echo '<hr>';
    foreach ($files1 as $key => $value){
        echo $key . ' : ' . $value . '</br>' ;
    }      
    echo '<hr>';

    echo"<table border align='center'>\n";
    echo"<tr>
     <th> Numéro du fichier </th>
     <th> le nom du fichier </th>
     <th> Supprimer </th>
     <th> Voir </th>
    </tr>\n";
    foreach ($files1 as $key => $value){
      echo " <td>" . $key . "</td>\n";
      echo " <td>". $value . "</td>" ;
      if ( ! is_dir('fichier/'.$value) ){
      echo "<td> <button> <a href='Supprimer.php?fich=".$value."'>Supprimer</a> </button> </td>";
      echo "<td> <button> <a href='voir.php?fich=".$value."'>Voir</a> </button> </td>";}
      else echo '<td> DIR </td>'; 
      echo "</tr>\n";
    }
    echo "</table>\n";
?>
    <br></br>
    <br></br>
    <br></br>    
    <br></br>

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




