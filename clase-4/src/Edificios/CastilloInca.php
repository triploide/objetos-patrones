<?php

namespace Patrones\Factory\Edificios;

class CastilloInca implements CastilloContract
{
    public function render()
    {
        return 'incas/edificios/castillo.jpg<br>';
    }

    public function listarUnidadesUnicas()
    {
        return [
            'Kamayuk',
            'Hondero'
        ];
    }
}
