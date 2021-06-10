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
  require_once 'Professor.php';
  require_once 'Funcionaria.php';

  $p2 = new Aluno('Franklin', '21', 'M', "72", 'ADS');
  $p3 = new Professor('Franklin', '21', 'M', 'PHP', '3000');
  $p4 = new Funcionaria('Franklin', '21', 'M', 'Tecnológico', true);

  echo "<pre>";
  print_r($p2);
  print_r($p3);
  print_r($p4);
  ?>
  </pre>
</body>

</html>