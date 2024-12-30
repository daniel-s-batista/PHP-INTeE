<?php

require "autoload.php";

use ScreenMatch\Modelo\{
    Filme, Episodio, Serie, Genero
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona, ConversorNotaEstrela
};

use ScreenMatch\Exception\NotaInvalidaException;

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Dragon Ball Super: Broly",
    2018,
    Genero::Luta,
    100
);

// $filme->avalia(10);
// $filme->avalia(8);

// var_dump($filme);

// echo $filme->media() . "\n";

$serie = new Serie("Dragon Ball Daima", 2024, Genero::Luta, 1, 26, 24);
// $serie->avalia(8);
// $serie->avalia(8);

// var_dump($serie);

// echo $serie->media() . "\n";

// $calculadora = new CalculadoraDeMaratona();
// $calculadora->inclui($filme);
// $calculadora->inclui($serie);

// echo "Tempo mínimo da maratona: " . $calculadora->duracao() . " minutos\n";

$episodio = new Episodio($serie, "Piloto", 1);

// $conversor = new ConversorNotaEstrela();
// echo $conversor->converte($serie) . "\n";
// echo $conversor->converte($filme);

try {
    $episodio->avalia(45);
    $episodio->avalia(-35);
    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
}
catch(NotaInvalidaException $ex) {
    echo "Um problema aconteceu: " . $ex->getMessage();
}