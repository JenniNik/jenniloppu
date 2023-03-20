<?php $this->layout('template', ['title' => 'Luo uusi tili']) ?>

<h1>Luo uusi tili</h1>

<form action="" method="POST">
  <div>
    <label for="nimi">Nimi:</label>
    <input id="nimi" type="text" name="nimi">
  </div>
  <div>
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email">
  </div>
  <div>
    <label for="salasana1">Salasana:</label>
    <input id="salasana1" type="password" name="salasana1">
  </div>
  <div>
    <label for="salasana2">Salasana uudelleen:</label>
    <input id="salasana2" type="password" name="salasana2">
  </div>
  <div>
    <input type="submit" name="laheta" value="Luo uusi tili">
  </div>
</form>