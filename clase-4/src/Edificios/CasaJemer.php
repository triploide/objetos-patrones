<?php

namespace Patrones\Factory\Edificios;

class CasaJemer implements CasaContract
{
    public function render()
    {
        return 'jemeres/edificios/casa.jpg<br>';
    }
    
    public function getHabitacionesLibres()
    {
        return 5;
    }

    public function puedoGuarecerAldeanos()
    {
        return true;
    }
}
