<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">

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
      
      <section>
      <aside>
      <br></br>
    <button onclick='stop() ;'> STOP Timer </button>
    <button onclick='inverse() ;'> INVERSE Timer </button>
    <button onclick='start() ;'> START Timer </button>
    <br></br>
      </aside>

      <aside name="Form">
        
        <div class="card"><img src="fichier/image1.jpg" name="img1"/></div>
        <div class="card"><img src="fichier/image2.jpg" name="img2"/></div>
        <div class="card"><img src="fichier/image3.jpg" name="img3"/></div>
        <div class="card"><img src="fichier/image4.jpg" name="img4"/></div>
        <div class="card"><img src="fichier/image1.jpg" name="img5"/></div>
        <div class="card"><img src="fichier/image2.jpg" name="img6"/></div>
        <div class="card"><img src="fichier/image3.jpg" name="img7"/></div>
        <div class="card"><img src="fichier/image4.jpg" name="img8"/></div>
    
      </aside>
    </section>

  <footer>
    <?php 
      include("PHP/footer.php"); 
    ?>
  </footer>


<!--Réservé aux scriptes ! Réservé aux scriptes ! Réservé aux scriptes ! Réservé aux scriptes ! Réservé aux scriptes !-->
<script>

var cpt = 1 ;
var cpt2 = 2 ;
var cpt3 = 3 ;
var timer1 = null ;

function reset()
{
  cpt -- ;
  if ( cpt < 4 ) cpt = 1;
  img1.src = cpt+'.jpg' ;

  cpt2 -- ;
  if ( cpt < 4 ) cpt2 = 2;
  img2.src = cpt2+'.jpg' ;

  cpt3 -- ;
  if ( cpt < 4 ) cpt2 = 3;
  img2.src = cpt3+'.jpg' ;
}

function moin()
{
  cpt -- ;
  if ( cpt < 1 ) cpt = 4;
  img1.src = cpt+'.jpg' ;

  cpt2 -- ;
  if ( cpt < 1 ) cpt2 = 4;
  if ( cpt == 4 ) cpt2 = 1;
  img2.src = cpt2+'.jpg' ;

  cpt3 -- ;
  if ( cpt < 4 ) cpt2 = 3;
  img2.src = cpt3+'.jpg' ;
}

function plus()
{
  cpt ++ ;
  if ( cpt > 4 ) cpt = 1;
  img1.src = cpt+'.jpg' ;

  cpt2 ++ ;
  if ( cpt > 4 ) cpt2 = 2;
  if ( cpt == 4 ) cpt2 = 1;
  img2.src = cpt2+'.jpg' ;

  cpt3 ++ ;
  if ( cpt > 4 ) cpt3 = 2;
  if ( cpt == 4 ) cpt3 = 1;
  img2.src = cpt3+'.jpg' ;
}

  function stop()
{
  if (timer1 == true){
  clearInterval(timer1);
  timer1 = null
  }
}

  function start()
{
  if (timer1 == null){
  timer1 = setInterval( 'plus()', 1500, ) ;
  timer1 = true
  }
}

function inverse()
{
  if (timer1 == null){
  timer1 = setInterval( 'moin()', 1500);
  timer1 = true
  }
}

</script>
    </body>
</html>
