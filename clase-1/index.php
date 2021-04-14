<?php

require __DIR__ . '/interfaces/Renderizable.php';
require __DIR__ . '/interfaces/Movible.php';
require __DIR__ . '/traits/Movil.php';
require __DIR__ . '/classes/Aldeano.php';
require __DIR__ . '/classes/Lobo.php';
require __DIR__ . '/classes/Casa.php';

$aldeano = new Aldeano('Persa');
$lobo = new Lobo(4);
$casa = new Casa;

$seleccion = [$aldeano, $lobo, $casa];

foreach ($seleccion as $objeto) {
    if ($objeto instanceof Movible) {
        $objeto->mover(3, 5);
    }

    if ($objeto instanceof Renderizable) {
        $objeto->render();
    }
}
