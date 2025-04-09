<?php

namespace Excecoes;

use Exception;

class UsuarioInvalidoException extends Exception {

    public function __construct($mensagem = "")
    {
        parent::__construct($mensagem);
    }

}