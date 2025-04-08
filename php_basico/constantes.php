<?php

require_once "./objetos.php";

define("TESTE", "Constante de teste!");

echo TESTE . "<br>";

const IP = "192.168.9.0";

echo IP . "<br>";

function apresentarConstante() {
    /**
     * todas as constantes possuem escopo global
     */
    var_dump(TESTE);
    echo "<br>";
    var_dump(IP);
    echo "<br>";
}

apresentarConstante();

function testeApresentarNomeFuncao() {

    // __FUNCTION__ -> armazena o nome da função
    return __FUNCTION__ . "<br>";
}

echo testeApresentarNomeFuncao();

class Endereco {

    public $cep;
    public $logradouro;
    public $complemento;
    public $cidade;
    public $bairro;
    public $numero;
    public $uf;

}

echo Endereco::class . "<br>";

echo Pessoa::class . "<br>"; // -> apresentar o nome da classe

echo __DIR__ . "<br>"; // apresentar o diretório onde o arquivo está
