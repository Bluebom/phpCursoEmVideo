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
    $abre = '<p>';
    $fecha = '</p>';
    $site = "Guanabara";
    echo substr($site, 0, 5);
    echo '<br>';
    echo str_ireplace($site, 'guanabara', 'Franklin');
    $novo = str_pad($site, 20, " - ", STR_PAD_BOTH);
    echo '<br>';
    echo "Meu professor é o $novo fera demais!";
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>