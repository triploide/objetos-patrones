<?php

namespace Maxi\Classes;

class Combatiendo extends Estado
{
    public function recolectar(Aldeano $aldeano)
    {
        echo 'Seguir combatiendo<br>';
    }

    public function depositar(Aldeano $aldeano)
    {
        echo 'Seguir combatiendo<br>';
    }

    public function combatir(Aldeano $aldeano)
    {
        echo 'Ya estoy combatiendo<br>';
    }
}
