<?php

class Potencia
{
    use Render;

    public function operar($num1, $num2)
    {
        return pow($num1, $num2);
    }

    public function getOperador()
    {
        return '^';
    }
}

