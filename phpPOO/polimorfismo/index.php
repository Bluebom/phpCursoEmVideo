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
    if ($arquivo == './class/Animal.php') {
      continue;
    }
    require_once $arquivo;
  }

  $p1 = new Mamifero('87kg', '21 anos', 4, "branca");
  // $p2 = new Reptil();
  // $p3 = new Peixe();
  $p4 = new Ave('40g', '2 meses', 4, 'Amarela');
  $p1->locomovoer();
  $p4->locomovoer();
  $p1->alimentar();
  $p4->alimentar();
  $p4->fazerNinho();
  echo "<pre>";
  print_r($p1);
  // print_r($p2);
  // print_r($p3);
  print_r($p4);

  ?>
  </pre>
</body>

</html>