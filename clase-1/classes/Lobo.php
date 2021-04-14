<?php

class Lobo implements Movible
{
    use Movil;

    protected $rango;
    protected $x;
    protected $y;

    public function __construct($rango)
    {
        $this->rango = $rango;
        $this->x = 0;
        $this->y = 0;
    }

    public function atacar($aldeano)
    {
        echo 'Estoy atacando un aldeno<br>';
    }
}
