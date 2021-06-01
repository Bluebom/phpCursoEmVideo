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
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    $abre = '<p>';
    $fecha = '</p>';
    // echo "$abre conteúdo $fecha";
    echo "$abre Os valores foram $n1 e $n2 $fecha";
    $r = ($tipo == 's') ? $n1 + $n2 : $n1 * $n2;
    echo "$abre O resultado é $r $fecha";
    ?>
  </div>

</body>

</html>