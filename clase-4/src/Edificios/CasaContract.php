<?php

namespace Patrones\Factory\Edificios;

interface CasaContract
{
    public function render();
    
    public function getHabitacionesLibres();

    public function puedoGuarecerAldeanos();
}
