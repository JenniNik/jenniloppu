<?php $this->layout('template', ['title' => 'Unohtunut salasana']) ?>

<h1>Unohtunut salasana</h1>

<p>Voit vaihtaa unohtuneen salasanan vaihtolinkin avulla. Vaihtolinkin voit tilata sähköpostiisi lisäämällä sähköpostiosoitteesi alla olevaan kenttään.</p>

<form action="" method="POST">
  <div>
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email">
  </div>
  <div>
    <input type="submit" name="laheta" value="Lähetä vaihtolinkki">
  </div>
</form>
