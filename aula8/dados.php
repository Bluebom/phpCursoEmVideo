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
      $nome = $_POST["name"];
      $idade = $_POST["age"];
      $sexo = $_POST["gender"];
      echo "$abre Seu nome é $nome. $fecha";
      echo "$abre Sua idade é $idade anos. $fecha";
      echo "$abre Seu gênero é $sexo. $fecha";
    } else {
      echo 'Nenhum dado foi passado!';
    }
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>