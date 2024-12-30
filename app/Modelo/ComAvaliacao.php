<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao {
    private array $notas = array();

    /**
     * 
     * @throws NotaInvalidaException Lança essa exceção se a nota informada não for um valor de 0 a 10
     * 
     */
    function avalia(float $nota) : void {
        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }
        $this->notas[] = $nota;
    }

    function media() : float {
        if (count($this->notas) > 0) {
            $somaNotas = array_sum($this->notas);
            $qntdNotas = count($this->notas);
    
            return $somaNotas / $qntdNotas;
        }
        else return 0;
    }
}
