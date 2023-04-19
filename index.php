<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<pre>
<body>

    <?php

    require_once 'ContaBanco.php';
    $p1 = new ContaBanco();
    $p2 = new ContaBanco();
    $p1->abrirConta('CC');
    $p1->setNunConta(111);
    $p1->setDono('Jubileu');
    $p2->abrirConta('CP');
    $p2->setNunConta(222);
    $p2->setDono('Maria');

    $p1->depositar(300);
    $p2->depositar(450);

    print_r($p1);
    print_r($p2);    

    ?>
</body>
</pre>

</html>
