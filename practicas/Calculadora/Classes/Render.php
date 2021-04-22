<?php

trait Render
{
    public function render($num1, $num2)
    {
        return $num1 . ' ' . $this->getOperador() . ' ' .$num2 . ' = ' . $this->operar($num1, $num2) . '<br>';
    }
}
