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
    $n1 = $_GET['x'];
    $n2 = $_GET['y'];
    $abre = '<p>';
    $fecha = '</p>';
    // echo "$abre conteúdo $fecha";
    echo "$abre valores recebidos $n1 e $n2 $fecha";
    echo "$abre O valor absoluto de $n1 e $n2 é igual a " . abs($n1) . " e " . abs($n2) . "$fecha";
    echo "$abre O valor de $n1 <sup>$n2</sup> é igual a " . pow($n1, $n2) . "$fecha";
    echo "$abre A raiz quadrada de $n2 é igual a " . sqrt($n2) . "$fecha";
    echo "$abre O valor da raiz quadrada de $n1 arredondado é igual a " . round(sqrt($n1)) . "$fecha";
    echo "$abre O valor de $n1 e $n2 em moeda é igual a R$" . number_format($n1, 2, ",", ".") . " e R$" . number_format($n2, 2, ",", ".") . "$fecha";

    ?>
  </div>
</body>

</html>