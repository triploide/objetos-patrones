<?php

// Crear una clase carrito
// Carrito tiene que tener un atributo productos del tipo array
// Tiene que tener un método agregar que reciba un comprable y lo agregue al array de productos
// Tiene que tener un método calcularTotal que devuelva el total de todos los productos agregados

require './Traits/Precio.php';
require './Traits/Descuento.php';
require './Interfaces/Comprable.php';
require './Classes/Producto.php';
require './Classes/Carrito.php';
require './Classes/TV.php';
require './Classes/Celular.php';
require './Classes/Microondas.php';
require './Classes/Heladera.php';



// $tv = new TV('Sony', 10000);
// $celular = new Celular('Samsung', 50000);
// $microondas = new Microondas('Philips', 10000);
// $heladera = new Heladera('Whirlpool', 40000);

// $carrito1 = new Carrito;
// $carrito1->agregar($tv);
// $carrito1->agregar($celular);

// $carrito1->setDescuento(10);
// $tv->setDescuento(10);

// $carrito2 = new Carrito;
// $carrito2->agregar($microondas);
// $carrito2->agregar($heladera);

// $carrito3 = new Carrito;
// $carrito3->agregar($carrito1);
// $carrito3->agregar($carrito2);

// var_dump($carrito3->total());

$tv = new TV('Sony', 10000);
$celular = new Celular('Samsung', 50000);
$microondas = new Microondas('Philips', 10000);
$heladera = new Heladera('Whirlpool', 40000);

$carrito1 = new Carrito;
$carrito1->agregar($tv);
$carrito1->agregar($celular);
$carrito1->setDescuento(10);
$carrito1->agregar($microondas);

var_dump($carrito1->total());

