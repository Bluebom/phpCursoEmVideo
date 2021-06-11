<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poo</title>
</head>

<body>
  <h1>Herança</h1>
  <?php
  foreach (glob('./class/*.php') as $arquivo) {
    if ($arquivo == './class/Pessoa.php') {
      continue;
    }
    require_once $arquivo;
  }
  $v[0] = new Video("Aula 1 de POO");
  $v[1] = new Video("Aula 12 de PHP");

  $g[0] = new Gafanhoto('Jubileu', 22, "M", "Juba");

  $vis[0] = new Visualizacao($g[0], $v[1]);
  $vis[1] = new Visualizacao($g[0], $v[0]);

  echo '<pre>';

  print_r($v);
  print_r($g);
  print_r($vis)
  ?>
  </pre>
</body>

</html>