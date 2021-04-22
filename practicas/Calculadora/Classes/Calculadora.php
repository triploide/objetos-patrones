<?php

class Calculadora
{
    protected $historial;

    public function __construct()
    {
        $this->historial = [];
    }

    public function sumar($num1, $num2)
    {
        $operacion = new Suma;

        return $this->calcular($num1, $num2, $operacion);
    }

    public function restar($num1, $num2)
    {
        $operacion = new Resta;

        return $this->calcular($num1, $num2, $operacion);
    }

    public function elevar($num1, $num2)
    {
        $operacion = new Potencia;

        return $this->calcular($num1, $num2, $operacion);
    }

    private function calcular($num1, $num2, $operacion)
    {
        $this->historial[] = [
            'operacion' => $operacion,
            'num1' => $num1,
            'num2' => $num2,
        ];

        return $operacion->operar($num1, $num2);
    }

    public function mostrarHistorial()
    {
        $resultado = '';

        foreach($this->historial as $item) {
            $operacion = $item['operacion'];
            $num1 = $item['num1'];
            $num2 = $item['num2'];

            $resultado .= $operacion->render($num1, $num2) . '<br>';
        }

        echo $resultado;
    }
}

