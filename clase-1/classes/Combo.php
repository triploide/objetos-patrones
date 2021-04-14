<?php

class Combo implements Comprable
{
    protected $productos;

    public function __construct()
    {
        $papas = new Papas(100);
        $burger = new Burger(300);

        $this->productos = [$papas, $burger];
    }

    public function getPrecio()
    {
        $total = 0;

        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }

        return $total;
    }
}
