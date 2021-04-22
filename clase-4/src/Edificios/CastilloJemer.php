<?php

namespace Patrones\Factory\Edificios;

class CastilloJemer implements CastilloContract
{
    public function render()
    {
        return 'jemeres/edificios/castillo.jpg<br>';
    }

    public function listarUnidadesUnicas()
    {
        return [
            'Elefante con ballesta',
        ];
    }
}
