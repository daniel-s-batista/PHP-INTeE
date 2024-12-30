<?php

namespace ScreenMatch\Calculos;

use ArgumentCountError;
use DivisionByZeroError;
use ScreenMatch\Modelo\Titulo;

class ConversorNotaEstrela {
    public function converte(Titulo $titulo) : float {
        try {
            $nota = $titulo->media();
            return round($nota) / 2;
        }
        catch(DivisionByZeroError|ArgumentCountError) {
            return 0;
        }
    }
}
