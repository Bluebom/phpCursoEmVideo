<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poo</title>
</head>

<body>
  <h1>Herança</h1>
  <?php
  require_once 'Pessoa.php';
  require_once 'Aluno.php';
  require_once 'Bolsista.php';
  require_once 'Professor.php';
  require_once 'Visitante.php';

  $p2 = new Aluno('Pedro', '16', 'M', 1111, 'Informática');
  $p3 = new Bolsista('Maria', '16', 'F', 7777, 'Design', '10%');
  $p2->pagarMensalidade();
  $p3->pagarMensalidade();
  echo "<pre>";
  print_r($p2);
  print_r($p3);

  ?>
  </pre>
</body>

</html>