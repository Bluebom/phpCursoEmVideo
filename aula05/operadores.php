<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/dashboard/cursoEmVideo/phpCursoEmVideo/default/_css/estilo.css">
  <title>Primeiro exemplo PHP</title>
</head>

<body>
  <div>
    <?php
    $n1 = $_GET['a'];
    $n2 = $_GET['b'];
    $br = '<br>';
    echo "A soma vale " . ($n1 + $n2);
    echo "$br A subtração vale " . ($n1 - $n2);
    echo "$br A multiplicação vale " . ($n1 * $n2);
    echo "$br A divisão vale " . ($n1 / $n2);
    echo "$br O resto vale " . ($n1 % $n2);
    echo "$br A média entre $n1 e $n2 é " . ($n1 + $n2) / 2;
    ?>
  </div>
</body>

</html>