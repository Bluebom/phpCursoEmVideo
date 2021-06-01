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
    $abre = '<label>';
    $fecha = '</label>';
    // echo "$abre conteúdo $fecha";
    echo '<form method="post" action="dados.php">';
    echo "$abre <p>*Nome:</p> <input type='text' name='name'> $fecha";
    echo "$abre <p>*Idade:</p> <input type='number' name='age'> $fecha";
    echo "<p><fieldset><legend>Sexo</legend>";
    echo "$abre <p>*Masculino</p> <input type='radio' name='gender' value='masculino' checked> $fecha";
    echo "$abre <p>*Feminino</p> <input type='radio' name='gender' value='feminino'> $fecha";
    echo "</fieldset>";
    echo "$abre<p><input type='submit' value='Enviar' name='acao'></p>$fecha";
    echo '</form></p>'
    ?>
  </div>

</body>

</html>