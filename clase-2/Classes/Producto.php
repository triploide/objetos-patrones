<?php

class Producto implements Comprable
{
    use Precio, Descuento;

    protected $marca;
    protected $precio;
    protected $descuento;

    public function __construct($marca, $precio)
    {
        $this->marca = $marca;
        $this->precio = $precio;
        $this->descuento = 0;
    }

    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    }
}
