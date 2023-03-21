<?php
// Suoritetaan projektin alustusskripti.
require_once '../src/init.php';

  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  // Siistimisen jälkeen osoite /~koodaaja/lanify/tapahtuma?id=1 on 
  // lyhentynyt muotoon /tapahtuma.
  $request = str_replace($config['urls']['baseUrl'],'',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

      // Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin.
  $templates = new League\Plates\Engine(TEMPLATE_DIR);



    
  switch ($request) {
    case '/':
    case '/tapahtumat':
      require_once MODEL_DIR . 'tapahtuma.php';
      $tapahtumat = haeTapahtumat();
      echo $templates->render('tapahtumat',['tapahtumat' => $tapahtumat]);
      break;
    case '/tapahtuma':
      require_once MODEL_DIR . 'tapahtuma.php';
      $tapahtuma = haeTapahtuma($_GET['id']);
      if ($tapahtuma) {
        echo $templates->render('tapahtuma',['tapahtuma' => $tapahtuma]);
      } else {
        echo $templates->render('tapahtumanotfound');
      }
      break;
        // ... switch-lauseen alku säilyy sellaisenaan
        case '/lisaa_tili':
          if (isset($_POST['laheta'])) {
            require_once MODEL_DIR . 'henkilo.php';
            $salasana = password_hash($_POST['salasana1'], PASSWORD_DEFAULT);
            $id = lisaaHenkilo($_POST['nimi'],$_POST['email'],$salasana);
            echo "Tili on luotu tunnisteella $id";
            break;
          } else {
            echo $templates->render('lisaa_tili');
            break;
          }    
        // ... switch-lauseen loppu säilyy sellaisenaan
    
    default:
      echo $templates->render('notfound');
  }    

        
 

?> 
