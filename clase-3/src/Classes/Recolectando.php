<?php

namespace Maxi\Classes;

class Recolectando extends Estado
{
    public function recolectar(Aldeano $aldeano)
    {
        echo 'Ya estoy recolectando<br>';
    }

    public function depositar(Aldeano $aldeano)
    {
        echo 'Ir a depositar<br>';

        $estado = new Depositando;

        $aldeano->setEstado($estado);
    }

    public function combatir(Aldeano $aldeano)
    {
        echo 'Finalizar la acción de recolección<br>';

        $estado = new Combatiendo;

        $aldeano->setEstado($estado);
    }
}
