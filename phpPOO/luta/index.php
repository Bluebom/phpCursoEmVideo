<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poo</title>
</head>

<body>
  <h1>Lutadores</h1>
  <?php
  require_once 'Lutador.php';
  $lutadores = array();
  $lutadores[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
  $lutadores[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
  $lutadores[3] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
  $lutadores[4] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.9, 13, 0, 2);
  $lutadores[5] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.7, 5, 4, 3);
  $lutadores[6] = new Lutador("NerdaArt", "EUS", 30, 1.81, 105.7, 12, 2, 4);
  echo '<pre>';

  foreach ($lutadores as $key => $value) {
    $lutadores[4]->perderLuta();
    $value->apresentar();
  }
  ?>
  </pre>
</body>

</html>