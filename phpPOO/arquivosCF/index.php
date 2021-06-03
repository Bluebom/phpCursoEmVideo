<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poo</title>
</head>

<body>
  <?php
  require_once 'Caneta.php';
  $c1 = new Caneta;
  $c1->modelo = "Bic cristal";
  $c1->cor = "Azul";
  // $c1->ponta = 0.5;
  // $c1->tampada = false;
  // $c1->destampar();
  $c1->rabiscar();
  echo '<br> <pre>';
  print_r($c1);
  ?>
  </pre>
</body>

</html>