<?php

use Patrones\Factory\Edificios\CasaJemer;
use Patrones\Factory\Utils\Civi;
use Patrones\Factory\Utils\Inca;
use Patrones\Factory\Utils\Jemer;
use Patrones\Factory\Utils\Jugador;

require __DIR__ . '/vendor/autoload.php';

$inca = new Inca();
$jemer = new Jemer();

$jugador1 = new Jugador($inca);
$jugador2 = new Jugador($jemer);

$casa1 = $jugador1->crearCasa();
$casa2 = $jugador2->crearCasa();

echo $casa1->render();
echo $casa2->render();

$castillo1 = $jugador1->crearCastillo();
$castillo2 = $jugador2->crearCastillo();

echo $castillo1->render();
echo $castillo2->render();

$scout1 = $jugador1->crearScout();
$scout2 = $jugador2->crearScout();

echo $scout1->render();
echo $scout2->render();

