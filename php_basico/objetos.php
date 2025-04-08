<?php

class Pessoa {

    // propriedades
    public string $nome;
    public int $idade;
    public bool $possuiCnh;
    public float $peso;
    public float $salario;

    // construtor
    public function __construct(
        string $nome = "",
        int $idade = 0,
        bool $possuiCnh = false,
        float $peso = 0,
        float $salario = 0
    )
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->possuiCnh = $possuiCnh;
        $this->peso = $peso;
        $this->salario = $salario;
    }

    // método
    public function validarPodeDirigir()
    {

        if ($this->possuiCnh) {

            return "A pessoa pode dirigir!<brt>";
        }

        return "A pessoa não pode dirigir!<br>";
    }

    // método
    public function apresentar()
    {
        /**
         * quando for acessar uma propriedade, utilizar a palavra reservada
         * $this->
         */
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
        echo "Possui cnh? " . $this->possuiCnh ? "Sim" : "Não";
        echo "Peso: KG" . $this->peso;
        echo "Salário: R$" . $this->salario;
        echo "<br>";
    }

}

// instanciando objetos
$pessoa1 = new Pessoa();
$pessoa2 = new Pessoa();

var_dump($pessoa1);
var_dump($pessoa2);

$pessoa1->nome = "Gabriel Rodrigues dos Santos";
$pessoa1->idade = 23;
$pessoa1->possuiCnh = true;
$pessoa1->peso = 87;
$pessoa1->salario = 3000;

echo $pessoa1->validarPodeDirigir();

$pessoa1->apresentar();

/**
 * objetos são do tipo referência
 */

$pessoa2 = $pessoa1;

echo "<br>";

$pessoa2->apresentar();

$pessoa2->nome = "Pedro Gustavo da Silva";

echo "Dados da pessoa 2:";
$pessoa2->apresentar();

echo "Dados da pessoa 1:";
$pessoa1->apresentar();

$pessoas = [
    new Pessoa("José", 23, false, 88.98, 2000),
    new Pessoa("Gabriel", 24, true, 98.00, 3000)
];

foreach ($pessoas as $pessoa) {
    $pessoa->apresentar();
}

// criar um objeto genérico
$objeto = new stdClass();

$objeto->nome = "teste";
$objeto->telefone = "(14) 99877-0689";

echo "Nome: " . $objeto->nome . "<br>";
echo "Telefone: " . $objeto->telefone . "<br>";
