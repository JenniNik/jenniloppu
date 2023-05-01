<?php $this->layout('template', ['title' => 'Tulevat tapahtumat']) ?>

<h1>Tulevia tapahtumia ja koulutuksia</h1>


<br><br>
<div class="kuva">
<div class='tapahtumat'>
<?php

foreach ($tapahtumat as $tapahtuma) {

  $start = new DateTime($tapahtuma['tap_alkaa']);
  $end = new DateTime($tapahtuma['tap_loppuu']);

  echo "<div>";
  echo "<div><b>$tapahtuma[nimi]</b></div>";
  echo "<div>" . $start->format('j.n.Y') . "-" . $end->format('j.n.Y') . "</div>";
  echo "<div><a href='tapahtuma?id=" . $tapahtuma['idtapahtuma'] . "'>LUE LISÄÄ JA ILMOITTAUDU!</a></div>";
  echo "</div>";
  echo "<br><br>";
  echo "<HR NOSHADE>";
 

}


?>


