<?php

require __DIR__ . '/interfaces/Renderizable.php';
require __DIR__ . '/interfaces/Comprable.php';
require __DIR__ . '/interfaces/Movible.php';
require __DIR__ . '/traits/Movil.php';
require __DIR__ . '/classes/Papas.php';
require __DIR__ . '/classes/Burger.php';
require __DIR__ . '/classes/Combo.php';
require __DIR__ . '/classes/Aldeano.php';

$papas = new Papas(150);
$burger = new Burger(450);
$combo = new Combo;
$aldeano = new Aldeano('Bereber');

$productos = [$papas, $burger, $combo, $aldeano];

$total = 0;

foreach ($productos as $producto) {
    if ($producto instanceof Comprable) {
        $total += $producto->getPrecio();
    }
}

echo $total;

