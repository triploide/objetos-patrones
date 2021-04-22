<?php

namespace Patrones\Factory\Utils;

class Jugador
{
    protected $civi;

    public function __construct($civi)
    {
        $this->civi = $civi;
    }

    public function crearCasa()
    {
        return $this->civi->crearCasa();
    }

    public function crearCastillo()
    {
        return $this->civi->crearCastillo();
    }

    public function crearScout()
    {
        return $this->civi->crearScout();
    }

    // public function crearCastillo()
    // {
    //     if ($this->civi->getNombre() == 'Inca') {
    //         echo "Nueva castillo - incas/edificios/castillo.jpg<br>";
    //     } elseif ($this->civi->getNombre() == 'Jemer') {
    //         echo "Nueva castillo - jemeres/edificios/castillo.jpg<br>";
    //     }
    // }
}
