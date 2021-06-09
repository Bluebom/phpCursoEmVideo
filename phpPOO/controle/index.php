<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poo</title>
</head>

<body>
  <h1>projeto Controle Remoto</h1>
  <?php
  require_once 'ControleRemoto.php';
  $c = new ControleRemoto();
  $c->ligar();
  // $c->desligar();
  for ($i = 0; $i <= 3; $i++) {
    $c->maisVolume();
  }
  $c->ligarMudo();
  $c->desligarMudo();
  $c->abrirMenu();


  echo '<pre>';
  print_r($c);
  ?>
  </pre>
</body>

</html>