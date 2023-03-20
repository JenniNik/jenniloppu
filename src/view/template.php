<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Junnukoodarit - koulutuskalenteri - <?=$this->e($title)?></title>
    <meta charset="UTF-8">   
    <link href="styles/styles.css" rel="stylesheet"> 
  </head>
  <body>
    <header>
    <h1><a href="<?=BASEURL?>">Junnukoodarit - Tapahtumakalenteri</a></h1>
    </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Junnudevaajat by Jenni Nikander</div>
    </footer>
  </body>
</html>
