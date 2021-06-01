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
    echo '<form method="post" action="dados.php">';
    echo "$abre <p>*Ano de Nascimento:</p> <input type='Number' placeholder='4 dígitos' name='ano'> $fecha";
    echo "$abre <p><input type='submit' value='Enviar' name='acao'></p>$fecha";
    echo '</form></p>'
    ?>
  </div>

</body>

</html>