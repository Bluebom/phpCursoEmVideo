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
    // echo "$abre conteúdo $fecha";
    $preco = $_GET['p'];
    echo "$abre O preço do produto é R$" . number_format($preco, 2, ',', '.') . "$fecha";
    $preco *= 1.1;
    echo "$abre Com o aumento de 10% fica R$" . number_format($preco, 2, ',', '.') . "$fecha";
    ?>
  </div>

</body>

</html>