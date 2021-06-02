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
    echo '<form method="post" action="dados_one.php">';
    echo "$abre <p>*Numero:</p> <input type='number' name='number'> $fecha";
    echo "<p><fieldset><legend>Operação</legend>";
    echo "$abre <input type='radio' name='operation' value='dobro' checked> <span>*Dobro</span> $fecha";
    echo "$abre <input type='radio' name='operation' value='cubo'> <span>*Cubo</span> $fecha";
    echo "$abre <input type='radio' name='operation' value='raiz2'> <span>*Raiz Quadrada</span> $fecha";
    echo "</fieldset>";
    echo "$abre<p><input type='submit' value='Calcular' name='acao'></p>$fecha";
    echo '</form></p>'
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>