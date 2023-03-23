<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Junnukoodarit - koulutuskalenteri - <?=$this->e($title)?></title>
    <meta charset="UTF-8">   
    <link href="styles/styles.css" rel="stylesheet"> 
  </head>
  <body>
    <div>
    <header>
    <h1><a href="<?=BASEURL?>">Junnukoodarit - Tapahtumakalenteri</a></h1>
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
                        <li><a href="etusivunäyttö.php">Etusivu</a></li>
                        <li><a href="ryhmät.html">Tapahtumakalenteri</a></li>
                        <li><a href="yhteystiedot.html">Avoimet työpaikat</a></li>
                        <li><a href="Koodarin_ABC.php">Koodarin ABC</a></li>
                        <li><a href="Verkostoidu.html">Verkostoidu</a></li>
                        <li><a href="Linkkipankki.html">Linkkipankki</a></li>
                </ul>
   </nav>

        
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



