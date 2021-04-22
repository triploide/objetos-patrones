<?php

namespace Patrones\Factory\Unidades;

class ScoutJemer implements ScoutContract
{
    public function render()
    {
        return 'incas/unidades/scout.jpg<br>';
    }

    public function costo()
    {
        return [
            'alimento' => 50,
            'tiempo' => 35
        ];
    }
}
