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
    function soma()
    {
      $p = func_get_args();
      $tot = func_num_args();
      $s = 0;
      for ($i = 0; $i < $tot; $i++) {
        $s += $p[$i];
      }
      return $s;
    }
    $soma = soma(3, 4, 8, 16, 33);
    echo "Soma dos números é $soma";
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>