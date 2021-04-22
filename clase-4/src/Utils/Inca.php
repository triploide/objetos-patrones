<?php

namespace Patrones\Factory\Utils;

use Patrones\Factory\Edificios\CasaInca;
use Patrones\Factory\Edificios\CastilloInca;
use Patrones\Factory\Unidades\AguilaInca;

class Inca implements Civi
{
    protected $nombre;

    public function __construct()
    {
        $this->nombre = 'Inca';
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function crearCasa()
    {
        return new CasaInca;
    }

    public function crearCastillo()
    {
        return new CastilloInca;
    }

    public function crearScout()
    {
        return new AguilaInca;
    }
}
