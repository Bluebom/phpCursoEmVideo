<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poo</title>
</head>

<body>
  <h1>Projeto Leitura de livros</h1>
  <?php
  require_once 'Pessoa.php';
  require_once 'Livro.php';

  $p[0] = new Pessoa("Pedro", 22, "M");
  $p[1] = new Pessoa("Maria", 31, "F");

  $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
  $l[1] = new Livro("POO com PHP", "Maria de num sei o que", 600, $p[0]);
  $l[2] = new Livro("PHP Avançado", "Ana Paula de Barros", 900, $p[1]);

  $l[0]->abrir();
  $l[0]->folhear(100);
  $l[0]->detalhe();

  $l[1]->abrir();
  $l[1]->folhear(100);
  $l[1]->detalhe();

  $l[2]->abrir();
  $l[2]->folhear(100);
  $l[2]->detalhe();

  echo '<pre>';
  // print_r($l[1]);
  ?>
  </pre>
</body>

</html>