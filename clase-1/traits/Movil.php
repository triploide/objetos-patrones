<?php

trait Movil
{
    public function mover($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

        echo "Estoy en x:{$this->x} y:{$this->y}<br>";
    }
}
