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
    <form method="post" action="dados_one.php">
      <label><span>*Numero:</span> <select name='number'>
          <?php
          $i = 0;
          // o fatorial de uma número
          do {
            $i++;
            echo "<option value='$i'>$i</option>";
          } while ($i < 10);
          ?>
        </select></label>
      <p><input type='submit' value='Calcular' name='acao'></p>
    </form>
  </div>

</body>

</html>