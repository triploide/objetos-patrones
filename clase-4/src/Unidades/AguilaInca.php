<?php

namespace Patrones\Factory\Unidades;

class AguilaInca implements ScoutContract
{
    public function render()
    {
        return 'incas/unidades/explorador-aguila.jpg<br>';
    }

    public function costo()
    {
        return [
            'alimento' => 20,
            'oro' => 50,
            'tiempo' => 35
        ];
    }
}
