<?php

class Burger implements Comprable
{
    protected $precio;

    public function __construct($precio)
    {
        $this->precio = $precio;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}
