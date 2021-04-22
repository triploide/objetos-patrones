<?php

namespace Maxi\Classes;

abstract class Estado
{
    public abstract function recolectar(Aldeano $aldeano);

    public abstract function depositar(Aldeano $aldeano);

    public abstract function combatir(Aldeano $aldeano);
}
