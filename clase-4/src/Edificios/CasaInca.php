<?php

namespace Patrones\Factory\Edificios;

class CasaInca implements CasaContract
{
    public function render()
    {
        return 'incas/edificios/casa.jpg<br>';
    }

    public function getHabitacionesLibres()
    {
        return 10;
    }

    public function puedoGuarecerAldeanos()
    {
        return false;
    }
}
