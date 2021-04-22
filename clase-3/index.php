<?php

use Maxi\Classes\Aldeano;

require __DIR__ . '/vendor/autoload.php';

// require __DIR__ . '/src/Classes/Estado.php';
// require __DIR__ . '/src/Classes/Combatiendo.php';
// require __DIR__ . '/src/Classes/Depositando.php';
// require __DIR__ . '/src/Classes/Recolectando.php';
// require __DIR__ . '/src/Classes/Aldeano.php';

$aldeano = new Aldeano;
$aldeano->recolectar();
$aldeano->depositar(); // acá
$aldeano->combatir();
$aldeano->combatir();

// echo '<pre>';
// var_dump($aldeano);


