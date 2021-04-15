<?php

trait Precio
{
    public function total()
    {
        // null, 0, '0', []
        if($this->getDescuento()) {
            $total = $this->precio - ($this->precio * ($this->getDescuento() / 100 ));
        } else {
            $total = $this->precio;
        }

        return $total;
    }
}
