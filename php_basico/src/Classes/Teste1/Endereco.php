<?php

namespace Teste1;

class Endereco {

    public $cep;
    public $complemento;
    public $logradouro;
    public $bairro;
    public $numero;
    public $cidade;
    public $uf;

    public function __construct(
        $cep,
        $complemento,
        $logradouro,
        $bairro,
        $numero,
        $cidade,
        $uf
    )
    {
        $this->cep = $cep;
        $this->complemento = $complemento;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->numero = $numero;
        $this->uf = $uf;
    }

}