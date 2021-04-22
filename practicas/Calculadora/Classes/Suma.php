<?php

class Suma
{
    use Render;

    public function operar($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function getOperador()
    {
        return '+';
    }
}

