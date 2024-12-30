<?php

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel {
    use ComAvaliacao;

    public function __construct(public readonly string $nome, 
                                public readonly int $anoLancamento, 
                                public readonly Genero $genero) {
        $this->notas = array();

        if ($this->notas != null) {
            foreach($this->notas as $nota) {
                $this->avalia($nota);
            }
        }
        $this->media();
    }

    abstract public function duracaoEmMinutos() : int;
}
