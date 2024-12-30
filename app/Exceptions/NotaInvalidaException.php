<?php

namespace ScreenMatch\Exception;

class NotaInvalidaException extends \InvalidArgumentException {
    #[\Override]
    public function __construct() {
        parent::__construct("A nota precisa ser um valor de 0 a 10");
    }
}
