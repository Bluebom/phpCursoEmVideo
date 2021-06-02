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
    if (isset($_POST['acao'])) {
      $numero = abs($_POST["number"]);
      for ($i = 0; $i <= 10; $i++) {
        echo "<strong>$numero x $i = " . $numero * $i . '</strong><hr>';
      }
      echo "<a class='btn' href='javascript:history.go(-1)'>Voltar</a>";
    } else {
      echo 'Nenhum dado foi passado!';
    }
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>