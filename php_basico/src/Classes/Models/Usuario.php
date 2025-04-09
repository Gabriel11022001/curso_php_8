<?php

namespace Models;

use Excecoes\UsuarioInvalidoException;

class Usuario {

    private string $login;
    private string $senha;

    public function __construct()
    {
        $this->login = "teste@teste.com";
        $this->senha = "teste123";
    }

    public function realizarLogin(string $login, string $senha) {

        if ($login === $this->login && $senha === $this->senha) {
            echo "Realizou login com sucesso!<br>";

            return;
        }

        // lançar uma exceção
        throw new UsuarioInvalidoException("Login ou senha incorretos!");
    }

}