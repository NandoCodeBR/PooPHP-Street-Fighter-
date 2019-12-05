<html>
    <head> </head>
    <body>
        <pre>
<?php
require_once 'Lutadores.php';
require_once 'Luta.php';


$lutador = [];
$lutador[0] = new Lutador("chunli",20,"Japão");
$lutador[1] = new Lutador("ryu",22,"Japão");
$lutador[2] = new Lutador("Zangief", 43, "Russia");
$lutador[3] = new Lutador("guile",40,"USA");
$lutador[4] = new Lutador("bison",47,"Desconhecido");
$lutador[5] = new Lutador("Blanka",30,"Brasil");
$lutas = [];
$lutas[1] = new Luta($lutador[1]->getNome(), $lutador[2]->getNome());

print_r($lutador[1]);
$lutador[1]->apresentacao($lutador[1]);
$lutas[1]->inicioLuta($lutador[1]->getNome(), $lutador[2]->getNome());
$lutas[1]->lutar($lutador[1], $lutador[2]);


?>
        </pre>
</body>