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
    echo '<form method="post" action="dados_two.php">';
    echo "$abre
    <span>*dia da semana:</span> <select name='day'>
      <option value='segunda-feira'>Segunda-feira</option>
      <option value='terça-feira'>Terça-feira</option>
      <option value='quarta-feira'>Quarta-feira</option>
      <option value='quinta-feira'>Quinta-feira</option>
      <option value='sexta-feira'>Sexta-feira</option>
      <option value='sábado'>Sábado</option>
      <option value='domingo7'>Domingo</option>
    </select> 
    $fecha";
    echo "$abre<input type='submit' value='Calcular' name='acao'>$fecha";
    echo '</form></p>'
    // echo "$abre conteúdo $fecha";
    ?>
  </div>

</body>

</html>