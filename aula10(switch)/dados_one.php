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
      $numero = $_POST["number"];
      $opera = $_POST["operation"];
      switch ($opera) {
        case 'dobro':
          $numero *= 2;
          break;
        case 'cubo':
          $numero = pow($numero, 3);
          break;
        default:
          $numero = sqrt($numero);
      }
      echo "O seu número sofre a operção '$opera' e fica igual a $numero";
    } else {
      echo 'Nenhum dado foi passado!';
    }
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>