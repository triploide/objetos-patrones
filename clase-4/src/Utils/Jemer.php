<?php

namespace Patrones\Factory\Utils;

use Patrones\Factory\Edificios\CasaJemer;
use Patrones\Factory\Edificios\CastilloJemer;
use Patrones\Factory\Unidades\ScoutJemer;

class Jemer implements Civi
{
    protected $nombre;

    public function __construct()
    {
        $this->nombre = 'Jemer';
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function crearCasa()
    {
        return new CasaJemer;
    }

    public function crearCastillo()
    {
        return new CastilloJemer;
    }

    public function crearScout()
    {
        return new ScoutJemer;
    }
}
