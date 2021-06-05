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
  require_once 'ContaBanco.php';
  $frank = new ContaBanco();
  $bru = new ContaBanco();
  $frank->abrirConta("CC");
  $frank->setDono('Franklin');
  $bru->abrirConta("CP");
  $bru->setDono('Bruna');

  $frank->depositar(300);
  $bru->depositar(500);

  $frank->pagarMensa();
  $bru->sacar(50);
  echo '<pre>';
  print_r($frank);
  print_r($bru);
  ?>
  </pre>
</body>

</html>