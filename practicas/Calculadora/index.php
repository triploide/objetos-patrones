<?php

require __DIR__ . '/Classes/Render.php';
require __DIR__ . '/Classes/Suma.php';
require __DIR__ . '/Classes/Resta.php';
require __DIR__ . '/Classes/Potencia.php';
require __DIR__ . '/Classes/Calculadora.php';

$calc = new Calculadora;

$res1 = $calc->sumar(3, 5);
$res2 = $calc->restar(10, 5);
$res3 = $calc->elevar(5, 2);
$res4 = $calc->elevar(5, 3);

// var_dump($res1, $res2, $res3, $res4);

// echo '<pre>';

// var_dump($calc);

$calc->mostrarHistorial();

