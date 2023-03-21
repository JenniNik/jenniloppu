<?php $this->layout('template', ['title' => 'Tili luotu']) ?>

<h1>Hienoa! Sinulle on nyt luotu uusi käyttäjätili ja kaikki on melkein valmista!</h1>

<p>Sinun tulee kuitenkin vielä varmistaa sähköpostiosoitteesi ennen, kuin voit käyttää
tiliäsi. Olet saanut sähköpostiisi (<?= getValue($formdata,'email') ?>)
vahvistusviestin. Ole hyvä ja käy vahvistamassa sähköpostiosoitteesi klikkaamalla
sähköpostiviestissä olevaa linkkiä.</p>
