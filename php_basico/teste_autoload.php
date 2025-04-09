<?php

// autoload é uma forma de incluir as classes sem ter que utilizar o require_once e include_once

use Teste1\Endereco;
use Teste1\Pessoa as Pessoa1; // posso ter duas classes com mesmo nome mas com namespace diferente
use Teste2\Pessoa as Pessoa2; // use <namespace> as <alias> -> dar um apelido para a classe

require_once "autoloader.php";

try {
    $pessoa1 = new Pessoa1();
    $pessoa2 = new Pessoa2();

    $pessoa1->setId(1);
    $pessoa1->setNomeCompleto("Gabriel Rodrigues dos Santos");
    $pessoa1->setTelefone("(14) 99877-7655");
    $pessoa1->setEmail("teste@teste.com");
    $pessoa1->setEndereco(new Endereco(
        "17690-000",
        "complemento de teste",
        "endereço de teste",
        "bairro de teste",
        "s/n",
        "Bastos",
        "SP"
    ));

    $pessoa1->apresentarDadosPessoa();

    $pessoa2->setId(2);
    $pessoa2->setRazaoSocial("Razão social de teste");
    $pessoa2->setTelefone("(14) 9987706544");
    $pessoa2->setEmail("teste2@teste.com");

    $pessoa2->apresentarDadosPessoa();
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}