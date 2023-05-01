<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Junnukoodarit - Tapahtumat ja verkostot - <?=$this->e($title)?></title>
    <meta charset="UTF-8">  
    <link href="styles/styles.css" rel="stylesheet"> 
  </head>
  <body>
    <div>
    <header>
    <h1><a href="<?=BASEURL?>">Junnukoodarit - Tapahtumat ja verkostot</a></h1>
    <div class="profile">
        <?php
          if (isset($_SESSION['user'])) {
            echo "<div>$_SESSION[user]</div>";
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          }
        ?>
      
    </header>
    <div>
    <nav>
      
            <ul>
                <li><a href="<?=BASEURL . "/yhteystiedot" ?>">YHTEYSTIEDOT</a></li>
                <li><a href="<?=BASEURL . "/verkostoidu"  ?>">VERKOSTOIDU</a></li>
                <li><a href="<?=BASEURL . "/koodarin_ABC" ?>">KOODAAMISEN ABC</a></li>    
                <li><a href="<?=BASEURL . "/vihreakoodaus"?>">VIHREÄ KOODAUS</a></li>        
                <li><a href="<?=BASEURL . "/kuvagalleria" ?>">KUVAGALLERIA</a></li> 
            </ul>

                
   </nav>
   <div class="kuvaetu">
   <img src='images/kuva5.jpg'>;
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Junnudevaajat by Jenni Nikander</div>
    </footer>
        </div>
  </body>
</html>
