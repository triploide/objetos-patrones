<?php

namespace Maxi\Classes;

class Depositando extends Estado
{
    public function recolectar(Aldeano $aldeano)
    {
        echo 'Seguir depositando<br>';
    }

    public function depositar(Aldeano $aldeano)
    {
        echo 'Ya estoy depositando<br>';
    }

    public function combatir(Aldeano $aldeano)
    {
        echo 'Finalizar la acción de depositar<br>';

        $estado = new Combatiendo;

        $aldeano->setEstado($estado);
    }
}
