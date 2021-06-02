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
    $p = "leite";
    $pr = 4.5;
    $v = [4, 8, 16];
    $txt = "    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, esse quidem quis, numquam aspernatur ad, distinctio voluptates eum odit beatae officiis doloremque sint unde assumenda ipsum? Et commodi beatae animi!!   ";
    $txt = trim($txt);
    $r = wordwrap($txt, 36, '<br>');
    $seq = join(' >> ', $v);
    // echo "$abre conteúdo $fecha";
    printf("O %s custa R$ %.2f", $p, $pr);
    echo "<br>";
    print_r($v);
    echo "<br>";
    var_dump($v);
    echo "<br>";
    var_export($v);
    echo "<br>";
    echo $r;
    echo "<br>";
    echo strlen($txt);
    echo "<br>";
    echo str_word_count($txt, 0);
    echo "<br>";
    print_r(explode("/", $txt));
    echo "<br>";
    print($seq);

    ?>
  </div>

</body>

</html>