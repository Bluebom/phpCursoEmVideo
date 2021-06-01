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
    $yearNow = (int)date('Y');
    $abre = '<p>';
    $fecha = '</p>';
    if (isset($_POST['acao'])) {
      $ano = $_POST['ano'];
      echo "$abre Sua idade é " . ($yearNow - $ano) . ".$fecha";
    } else {
      echo 'Nenhum dado foi passado!';
    }
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>