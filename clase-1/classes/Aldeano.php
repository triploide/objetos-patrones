<?php

class Aldeano implements Movible, Renderizable
{
    use Movil;

    protected $civi;
    protected $x;
    protected $y;

    public function __construct($civi)
    {
        $this->civi = $civi;
        $this->x = 0;
        $this->y = 0;
    }

    public function recolectar($lugar)
    {
        echo 'Estoy recolectando<br>';
    }

    public function render()
    {
        echo 'render de aldeano<br>';
    }
}
