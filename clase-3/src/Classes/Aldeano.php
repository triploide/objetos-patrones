<?php

namespace Maxi\Classes;

class Aldeano
{
    protected $estado;

    public function __construct()
    {
        $this->estado = new Recolectando;
    }

    public function recolectar()
    {
        $this->estado->recolectar($this);
    }

    public function depositar()
    {
        $texto = 'Este texto te lo pasa un aldeano';

        $this->estado->depositar($this);
    }

    public function combatir()
    {
        $this->estado->combatir($this);
    }

    public function setEstado(Estado $estado)
    {
        $this->estado = $estado;
    }

    // public function recolectar()
    // {
    //     if ($this->estado == 'depositando') {
    //         echo 'Seguir depositando<br>';

    //         // pasan cosas

    //         $this->estado = '';
    //     } elseif ($this->estado == 'combatiendo') {
    //         echo 'Seguir combatiendo';
    //     } else {
    //         echo 'Voy a recolectar<br>';

    //         $this->estado = 'recolectando';
    //     }
    // }

    // public function depositar()
    // {
    //     if ($this->estado == 'recolectando') {
    //         echo 'Voy a depositar<br>';

    //         $this->estado = 'depositando';
    //     } elseif ($this->estado == 'combatiendo') {
    //         echo 'Seguir combatiendo<br>';
    //     } else {
    //         echo 'Voy a depositar<br>';

    //         $this->estado = 'depositando';
    //     }
    // }

    // public function combatir()
    // {
    //     if ($this->estado == 'recolectando') {
    //         echo 'Voy a combatir<br>';

    //         $this->estado = 'combatiendo';
    //     } elseif ($this->estado == 'depositando') {
    //         echo 'Finalizar la acción de depositar<br>';

    //         // pasan cosas

    //         $this->estado = '';
    //     } else {
    //         echo 'Voy a combatir<br>';

    //         $this->estado = 'combatiendo';
    //     }
    // }
}

