<?php

class Carrito implements Comprable
{
    use Descuento;

    protected $comprables = [];
    protected $descuento = 0;

    public function agregar(Comprable $comprable)
    {
        // TODO: implementar
        $this->comprables->add($comprable);

        $comprable->setDescuento($this->descuento);

        array_push($this->comprables, $comprable);
    }

    public function total()
    {
        $total = 0;

        foreach ($this->comprables as $comprable) {
            $total += $comprable->total();
        }

        return $total;
    }

    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        $this->each(function ($comprable) use ($descuento) {
            $comprable->setDescuento($descuento);
        });
    }

    public function each($callback)
    {
        foreach ($this->comprables as $comprable) {
            $callback($comprable);
        }
    }
}
